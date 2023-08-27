<?php

namespace App\Document\Areabrick;

use App\Service\APIService;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Editable\Area\Info;
use Symfony\Component\HttpFoundation\Response;

class Product extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Product';
    }

    // public function action(Info $info): ?Response
    // {
    //     /**
    //      * @var $specialist specialist
    //      */
    //     $specialist = $this->getDocumentEditable($info->getDocument(), 'relation', 'specialist')->getElement();
    //     $info->setParam('specialist', $specialist);

    //     return null;
    // }
}
