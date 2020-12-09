<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UniversityController extends AbstractController
{
    /**
     * @Route("/university", name="university")
     */
    public function index(): Response
    {
        return $this->render('university/index.html.twig', [
            'controller_name' => 'UniversityController',
        ]);
    }
}
