<?php

namespace HelperBundle\Extension;

use HelperBundle\LinkGenerator\AbstractLinkGenerator;
use Pimcore\Model\DataObject\AbstractObject;
use Twig\TwigFunction;

class AbstractLinkExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @var AbstractLinkGenerator
     */
    protected $abstractLinkGenerator;

    /**
     * AbstractExtension constructor.
     *
     * @param AbstractLinkGenerator $abstractLinkGenerator
     */
    public function __construct(AbstractLinkGenerator $abstractLinkGenerator)
    {
        $this->abstractLinkGenerator = $abstractLinkGenerator;
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('helperbundle_abstract_detaillink', [$this, 'generateLink']),
        ];
    }

    /**
     * @param $abstract
     */
    public function generateLink(AbstractObject $abstract, $params = [])
    {
        return $this->abstractLinkGenerator->generate($abstract, $params);
    }
}
