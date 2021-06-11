<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Competences;
use App\Entity\Formation;
use App\Entity\Information;
use App\Entity\ProfessionalExperiences;
use App\Entity\Projets;
use App\Entity\Hobbies;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $competences = $this->getDoctrine()
        ->getRepository(Competences::class)
        ->findAll();
        $formation = $this->getDoctrine()
        ->getRepository(Formation::class)
        ->findAll();

        $information = $this->getDoctrine()
        ->getRepository(Information::class)
        ->findAll();

        $professional_experiences = $this->getDoctrine()
        ->getRepository(ProfessionalExperiences::class)
        ->findAll();

        $projets = $this->getDoctrine()
        ->getRepository(Projets::class)
        ->findAll();

        $hobbies = $this->getDoctrine()
        ->getRepository(Hobbies::class)
        ->findAll();

        return $this->render('home/index.html.twig', [
            'competences' => $competences,
            'formations' => $formation,
             'information' => $information,
             'professional_experiences' => $professional_experiences,
             'projets' => $projets,
             'hobbies' => $hobbies
        ]);
    }
}
