<?php
namespace App\Controller;
use App\Entity\State;
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
        $stateLost = $this->getDoctrine()->getRepository(State::class)->findOneBy(["label" => "Perdu"]);
        $traobjectsLost = $this->getDoctrine()->getRepository(Traobject::class)->findLast($stateLost, 4);


        $stateFound = $this->getDoctrine()->getRepository(State::class)->findOneBy(["label" => "Trouvé"]);
        $traobjectsFound = $this->getDoctrine()->getRepository(Traobject::class)->findLast($stateFound, 4);

        return $this->render('default/homepage.html.twig', [
            'traobjectsLost' => $traobjectsLost,
            'traobjectsFound' => $traobjectsFound,
        ]);
    }
}