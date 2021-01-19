<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Country;
use APP\Entity\Cost;
use APP\Entity\Live;
use APP\Entity\Opinion;

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
        $cost = $country->getCost();
        $live = $country->getLive();

        return $this->render('country/show.html.twig', [
            'country' => $country, 'cost' => $cost, 'live' => $live,
        ]);
    }
}
