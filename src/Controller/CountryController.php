<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Country;
use APP\Entity\Cost;
use APP\Entity\Live;
use APP\Entity\Opinion;
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

    public function show(Country $country, Request $request, int $id, OpinionRepository $opinionRepository): Response
    {
        $cost = $country->getCost();
        $live = $country->getLive();
        $opinions = $country->getOpinion();
        $comments = $opinionRepository->findBy(['country'=>$id]);
        $form = $this->createForm(OpinionType::class, $opinions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($opinions);
            $entityManager->flush();

            return $this->redirectToRoute('country_show', array('id'=>$id));
        }

        return $this->render('country/show.html.twig', [
            'country' => $country, 'cost' => $cost, 'live' => $live, 'opinions' => $opinions, 'comments' => $comments, 'form' => $form -> createView()
        ]);
    }
}
