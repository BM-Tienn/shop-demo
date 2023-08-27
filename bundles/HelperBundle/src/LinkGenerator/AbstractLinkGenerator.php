<?php

namespace HelperBundle\LinkGenerator;

use HelperBundle\Tool\Text;
use Pimcore\Http\Request\Resolver\DocumentResolver;
use Pimcore\Localization\LocaleServiceInterface;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\Document;
use Pimcore\Twig\Extension\Templating\PimcoreUrl;
use Symfony\Component\HttpFoundation\RequestStack;
use Pimcore\Model\DataObject\Category;
use Pimcore\Model\DataObject\Product;
use Pimcore\Tool;
use Pimcore\Model\Document\Service;

class AbstractLinkGenerator implements LinkGeneratorInterface
{
    /**
     * @var DocumentResolver
     */
    protected $documentResolver;

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var PimcoreUrl
     */
    protected $pimcoreUrl;

    /**
     * @var LocaleServiceInterface
     */
    protected $localeService;

    /**
     * @var Service|Service\Dao
     */
    private $documentService;

    /**
     * NewsLinkGenerator constructor.
     *
     * @param DocumentResolver $documentResolver
     * @param RequestStack $requestStack
     * @param PimcoreUrl $pimcoreUrl
     * @param LocaleServiceInterface $localeService
     */
    public function __construct(
        DocumentResolver $documentResolver,
        RequestStack $requestStack,
        PimcoreUrl $pimcoreUrl,
        LocaleServiceInterface $localeService,
        Service $documentService
    )
    {
        $this->documentResolver = $documentResolver;
        $this->requestStack = $requestStack;
        $this->pimcoreUrl = $pimcoreUrl;
        $this->localeService = $localeService;
        $this->documentService = $documentService;
    }

    public function generate(object $object, array $params = []): string
    {
        $document = new Document();

        if($this->requestStack->getCurrentRequest()) {
            $localePath = $this->requestStack->getCurrentRequest()->getLocale();
        } else {
            $localePath = $params['localeRoot'];
        }

        if ($localePath == 'en') {
            $document = Document::getByPath("/" . $localePath);
        }

        if ($object instanceof Category) {
            $routeName = 'category-detail';
            $name = $object->getName($localePath) ? $object->getName($localePath) : $routeName;
            $documentRoot = $document->getProperty('category_document');
            return $this->getLink($object, $params, $name, $routeName, $documentRoot);
        }

        if ($object instanceof Product) {
            $routeName = 'product-detail';
            $name = $object->getName($localePath) ? $object->getName($localePath) : $routeName;
            $documentRoot = $document->getProperty('product_document');
            return $this->getLink($object, $params, $name, $routeName, $documentRoot);
        }

        throw new \InvalidArgumentException('Given object not found');
    }

    public function getLink($object, $params, $name, $routeName, $documentRoot)
    {
        return DataObject\Service::useInheritedValues(true, function () use ($object, $params, $name, $routeName, $documentRoot) {
            $fullPath = '';

            if (isset($documentRoot) && $documentRoot instanceof Document) {
                $document = $documentRoot;
            } else {
                $document = $this->documentResolver->getDocument($this->requestStack->getCurrentRequest());
            }

            $localeUrlPart = '/' . $this->localeService->getLocale() . '/';

            if ($document && $localeUrlPart !== $document->getFullPath()) {
                if (isset($params['localeRoot'])) {
                    $fullPath = $document->getFullPath();
                } else {
                    $fullPath = substr($document->getFullPath(), strlen($localeUrlPart));
                }
            }

            //lấy fullpath theo language
            $path = substr($localeUrlPart, 1) . $fullPath;

            return $this->pimcoreUrl->__invoke(
                [
                'name' => strtolower(Text::toUrl($name)),
                'id' => $object->getId(),
                'path' => $path,
                '_locale' => $params['locale'] ?? null,
            ],
                $routeName,
                true
            );
        });
    }
}
