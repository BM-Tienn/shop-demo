<?php

namespace App\Controller;

use Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Twig\Attribute\Template;

class AreablockController extends BaseController
{
    /**
     * @param Request $request
     */
    #[Template('components/areablock/product-listing.html.twig')]
    public function listingAction(Request $request)
    {
        $products = $request->get('products');

        return [
            'products' => $products
        ];
    }
}
