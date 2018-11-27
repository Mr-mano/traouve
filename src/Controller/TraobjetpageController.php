<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TraobjetpageController extends AbstractController
{
    /**
     * @Route("/traobjetpage", name="traobjetpage")
     */
    public function index()
    {
        return $this->render('traobjetpage/index.html.twig', [
            'controller_name' => 'TraobjetpageController',
        ]);
    }
}
