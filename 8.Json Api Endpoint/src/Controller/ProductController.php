<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    public $products = [];

    public function __construct()
    {
        $this->products = [
            [
                'id' => 0,
                'title' => 'Casque Audio',
                'price' => '500 DH',
                'image' => 'headphone.jpg',
                'description' => 'Casque audio de haute qualité avec réduction de bruit et confort optimal.',
            ],
            [
                'id' => 1,
                'title' => 'Portable',
                'price' => '7200 DH',
                'image' => 'phone.jpg',
                'description' => 'Smartphone dernier cri avec un écran AMOLED et une excellente performance.',
            ],
            [
                'id' => 2,
                'title' => 'Montre Intelligente',
                'price' => '600 DH',
                'image' => 'watch.jpg',
                'description' => 'Montre intelligente avec suivi de l’activité et notifications en temps réel.',
            ],
            [
                'id' => 3,
                'title' => 'Caméra',
                'price' => '4550 DH',
                'image' => 'camera.jpg',
                'description' => 'Caméra numérique avec une résolution élevée et plusieurs modes de prise de vue.',
            ],
        ];
        
    }
    // Routes config file
    public function products()
    {
        return $this->render(
            'product/list.html.twig',
            ['products' => $this->products]
        ); // render return a Response
    }

    public function product($id)
    {
        return $this->render(
            'product/single.html.twig',
            ['product' => $this->products[$id]]
        );
    }

    public function new()
    {
        return new Response("New Product Page");
    }

}