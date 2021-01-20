<?php

namespace App\Controller;

use APP\Entity\Opinion;
use App\Form\OpinionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OpinionController extends AbstractController
{
    /**
     * The controller for the opinion add form
     *
     * @Route("/new", name="new")
     */
    public function new(Request $request) : ?Response
    {
        $opinion = new Opinion();
        $form = $this->createForm(OpinionType::class, $opinion);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($opinion);
            $entityManager->flush();

            return $this->redirectToRoute('country_index');
        }
        return $this->render('opinion/new.html.twig', ["form" => $form->createView()]);
    }
}

//   /**
//     * @Route("/opinion/{id}", name="opinion_show")
//     */
//    public function show(Opinion $opinion): Response
//    {
//        $opinion->getOpinion();
//
//        return $this->render('opinions/show.html.twig', [
//            'opinion' => $opinion
//        ]);
//    }