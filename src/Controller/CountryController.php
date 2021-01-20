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
        $opinion = $country->getOpinions();

        return $this->render('country/show.html.twig', [
            'country' => $country, 'cost' => $cost, 'live' => $live, 'opinion' => $opinion
        ]);
    }

    /**
     * @Route("/country/{id}/cost", name="cost_show")
     */

    public function showCost(Country $country): Response
    {
        $cost = $country->getCost();

        return $this->render('cost/show.html.twig', [
            'cost' => $cost,
        ]);
    }

    /**
     * @Route("/country/{id}/live", name="live_show")
     */

    public function showLive(Country $country): Response
    {
        $live = $country->getLive();

        return $this->render('live/show.html.twig', [
            'live' => $live,
        ]);
    }

    /**
     * @Route("/country/{id}/opinions", name="opinions_show")
     */

    public function showOpinions(Country $country): Response
    {
        $opinions = $country->getLive();

        return $this->render('opinions/show.html.twig', [
            'opinions' => $opinions,
        ]);
    }


}
