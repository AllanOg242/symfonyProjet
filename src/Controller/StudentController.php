<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    public function __construct(private StudentRepository $studentRepository){

    }

    #[Route('/student', name: 'student.index')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'students' => $this->studentRepository->findAll(),
        ]);
    }
}
