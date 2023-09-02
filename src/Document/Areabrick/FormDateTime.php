<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Editable\Area\Info;

class FormDateTime extends AbstractAreabrick implements EditableDialogBoxInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Form Date Time';
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getEditableDialogBoxConfiguration(Document\Editable $area, ?Info $info): EditableDialogBoxConfiguration
    {
        $config = new EditableDialogBoxConfiguration();
        $config->setWidth(600);
        $config->setReloadOnClose(true);
        $config->setItems([
            [
                'type' => 'input',
                'label' => 'Nội dung hiển thị của label',
                'name' => 'label'
            ],
            [
                'type' => 'checkbox',
                'name' => 'required',
                'label' => 'Trường bắt buộc nhập hay không',
            ],
            [
                'type' => 'checkbox',
                'name' => 'dateNow',
                'label' => 'Tự động lấy thời gian thực khi submit',
            ],
        ]);

        return $config;
    }
}
