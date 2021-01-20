<?php

namespace App\Controller;

use App\Entity\University;
use App\Repository\CountryRepository;
use App\Repository\UniversityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CountryRepository $countryRepository, UniversityRepository $universityRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'countries' => $countryRepository->findAll(),
            'universities' => $universityRepository->findAll()
        ]);
    }
}
