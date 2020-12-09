<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Country;


class CountryController extends AbstractController
{
    /**
     * @Route("/country", name="country")
     */
    public function index(CountryRepository $countryRepository): Response
    {
        $countries = $countryRepository->findAll();

        return $this->render('country/index.html.twig', [
            'countries' => $countries
        ]);
    }
    /**
     * @Route("/country/{id}", name="country_show")
     */

    public function show(Country $country): Response
    {
        if (!$country) {
            throw $this->createNotFoundException(
                'No program with id : '.$country.' found in program\'s table.'
            );
        }
        return $this->render('country/show.html.twig', [
            'country' => $country, 
        ]);




    }
}
