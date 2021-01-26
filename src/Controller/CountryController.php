<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Country;
use App\Entity\Cost;
use App\Entity\Live;
use App\Entity\Opinion;
use Symfony\Component\HttpFoundation\Request;
use App\Form\OpinionType;
use App\Repository\OpinionRepository;

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
        $opinion = $country->getOpinion();

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
     * @Route("/country/{id}/opinions", name="opinions_show", methods={"GET", "POST"})
     */

    public function showOpinion(Country $country, Request $request, CountryRepository $countryRepository, OpinionRepository $opinionRepository, $id): Response
    {
        $opinion = new Opinion();
        $form = $this->createForm(OpinionType::class, $opinion);
        $form->handleRequest($request);
        $user = $this->getUser();

        $countries = $countryRepository->find($id);
        $opinions = $opinionRepository->findBy(['country' => $id]);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $opinion->setUser($user);
            $opinion->setCountry($country);
            $entityManager->persist($opinion);
            $entityManager->flush();
        }
        return $this->render('opinion/show.html.twig', [
            'opinions' => $opinions,
            'form' => $form -> createView(),
            'user' => $user,
            'country' => $countries,
        ]);
    }
}
