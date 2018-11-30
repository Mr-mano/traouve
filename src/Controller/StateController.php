<?php

namespace App\Controller;

use App\Entity\State;
use App\Entity\Traobject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StateController extends AbstractController
{
    /**
     * @Route("/state", name="state_perdu")
     */
    public function index()
    {

        $stateLost = $this->getDoctrine()->getRepository(State::class)->findOneBy(["label" => "Perdu"]);
        $traobjectsLost = $this->getDoctrine()->getRepository(Traobject::class)->findAll();



        return $this->render('state/perdu.html.twig', [
            'traobjectsLost' => $traobjectsLost,
            'stateLost' => $stateLost
        ]);
    }
}
