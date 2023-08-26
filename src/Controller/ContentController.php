<?php

namespace App\Controller;

use Pimcore\Bundle\AdminBundle\Controller\Admin\LoginController;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Twig\Attribute\Template;

class ContentController extends FrontendController
{
    /**
     * @param Request $request
     */
    #[Template('content/default.html.twig')]
    public function defaultAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/home.html.twig')]
    public function homeAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/error.html.twig')]
    public function errorAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/about.html.twig')]
    public function aboutAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/contact.html.twig')]
    public function contactAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/blog.html.twig')]
    public function blogAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/product.html.twig')]
    public function productAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/feature.html.twig')]
    public function featureAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/store.html.twig')]
    public function storeAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     */
    #[Template('content/testimonial.html.twig')]
    public function testimonialAction(Request $request)
    {
        return [];
    }
}
