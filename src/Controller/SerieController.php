<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SerieController extends AbstractController
{
    /**
     * @Route("/serie", name="serie")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/SerieController.php',
        ]);
    }

    /**
     * @Route ("/serie/add/",name="serie_add")
     */
    public function add(): Response {
        // Création d'une instance
        $serie = new Serie();
        // Dans une instance forme je le créé
        $form = $this->createForm(SerieType::class,$serie);
        // retourn l'interface graphique du formualire
        return $this->render('serie/add.html.twig',['serieForm'=>$form->createView()]);

    }

}
