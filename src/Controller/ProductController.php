<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController{

    #[Route('/product/{product_name}', name: 'product.detail')]
    public function detail(string $product_name):Response{
        $array = [
            'key1' => 'product1',
            'key2' => 'product2',
        ];
        $now = new \DateTime();
        return $this->render('product/detail.html.twig', [
            'nom' => $product_name,
            'array' => $array,
            'now' => $now,
        ]);
    }
}

