<?php

namespace App\Document\Areabrick;

use App\Service\APIService;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Editable\Area\Info;

class Testimonial extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Testimonial';
    }
}
