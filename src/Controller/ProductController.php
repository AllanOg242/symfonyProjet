<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController{

    public function __construct(private ProductRepository $productRepository){

    }
    #[Route('/product/index', name: 'product.index')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $this->productRepository->findAll(),
        ]);
    }

    #[Route('/product/{slug}', name: 'product.detail')]
    public function detail(string $slug):Response{
        /*$array = [
            'key1' => 'product1',
            'key2' => 'product2',
        ];
        $now = new \DateTime();
        return $this->render('product/detail.html.twig', [
            'nom' => $product_name,
            'array' => $array,
            'now' => $now,
        ]);*/

        $product = $this->productRepository->findOneBy([
            'slug'=> $slug
        ]);
        dump($product);
        return $this->render('product/detail.html.twig', [
            'product' => $product
            ]);
    }
}

