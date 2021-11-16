<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController{

    #[Route('/', name: 'homepage.index')]
    public function index():Response{
        return $this->render('homepage/index.html.twig');
    }

    #[Route('/hello/{name}', name: 'homepage.hello')]
    public function hello(string $name):Response{
        $array = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
            'key4' => 'value4',
        ];
        $now = new \DateTime();
        return $this->render('homepage/hello.html.twig', [
            'nom' => $name,
            'array' => $array,
            'now' => $now,
        ]);
    }
}

