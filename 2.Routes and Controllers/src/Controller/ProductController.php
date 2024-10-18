<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{

    // Routes config file
    public function products()
    {
        return new Response("My list of products");
    }

    public function product($id)
    {
        return new Response("I'm product number: #".$id);
    }

    public function new()
    {
        return new Response("New Product Page");
    }

}
