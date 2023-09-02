<?php

namespace App\Controller;

use Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends BaseController
{
    /**
     * @param Request $request
     */
    #[Template('product/listing.html.twig')]
    public function listingAction(Request $request)
    {
        return [];
    }

    /**
     * @Route("{path}/{name}~p{id}", name="product-detail", requirements={"path"=".*?", "id"="\d+"})
     */
    public function detailAction(Request $request)
    {
        return $this->render('product/listing.html.twig');
    }
}
