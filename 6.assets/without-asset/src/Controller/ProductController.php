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
        $products = // src/Controller/ProductController.php
            $products = [
                [
                    'title' => 'Casque Audio',
                    'price' => '500 DH',
                    'image' => 'headphone.jpg',
                ],
                [
                    'title' => 'Portable',
                    'price' => '7200 DH',
                    'image' => 'phone.jpg',
                ],
                [
                    'title' => 'Montre Intelligente',
                    'price' => '600 DH',
                    'image' => 'watch.jpg',
                ],
                [
                    'title' => 'Caméra',
                    'price' => '4550 DH',
                    'image' => 'camera.jpg',
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
