<?php

namespace App\Controller;

use App\Entity\County;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CountyController extends AbstractController
{

    public function showcounties()
    {
        $counties = $this->getDoctrine()->getRepository(County::class)->findAll();

        return $this->render('footerlist/footercounty.html.twig', [
            'counties' => $counties
        ]);
    }
}
