<?php

namespace App\Document\Areabrick;

use App\Service\APIService;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Editable\Area\Info;
use Symfony\Component\HttpFoundation\Response;

class Product extends AbstractAreabrick implements EditableDialogBoxInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Product';
    }

    public function action(Info $info): ?Response
    {
        $products = [];

        for ($i=1; $i<=10; $i++) {
            $products[] = $this->getDocumentEditable($info->getDocument(), 'relation', 'product' . $i)->getElement();
        }

        $info->setParam('products', $products);

        return null;
    }


    public function getEditableDialogBoxConfiguration(Document\Editable $area, ?Info $info): EditableDialogBoxConfiguration
    {
        $config = new EditableDialogBoxConfiguration();
        $config->setWidth(600);
        $config->setReloadOnClose(true);
        $config->setItems([
            [
                'type' => 'numeric',
                'label' => 'Số lượng sản phẩm hiển thị',
                'name' => 'count',
            ],
        ]);

        return $config;
    }
}
