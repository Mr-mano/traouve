<?php

namespace App\Controller;

use App\Entity\Traobject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $traobjects = $this->getDoctrine()->getRepository(Traobject::class)->findAll();

        return $this->render('default/homepage.html.twig', [
            'traobjects' => $traobjects,
        ]);
    }


}
