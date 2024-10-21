<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    // Routes config file
    public function products()
    {
        $products = [
            [
                'id' => 1,
                'title' => 'Product A',
                'price' => 19.99
            ],
            [
                'id' => 2,
                'title' => 'Product B',
                'price' => 29.99
            ],
            [
                'id' => 3,
                'title' => 'Product C',
                'price' => 39.99
            ],
        ];

        dump($products);

        return $this->render(
            'product/list.html.twig',
            ['products' => $products]
        ); // render return a Response
    }

    public function product($id)
    {
        return new Response("I'm product number: #" . $id);
    }

    public function new()
    {
        return new Response("New Product Page");
    }

}
