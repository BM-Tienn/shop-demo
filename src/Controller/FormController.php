<?php

namespace App\Controller;

use Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends BaseController
{
    /**
     * @param Request $request
     */
    #[Template('form/default.html.twig')]
    public function defaultAction(Request $request)
    {
        return [];
    }
}
