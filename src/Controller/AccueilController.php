<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function accueil(UserRepository $userRepository): Response {


        $User = $userRepository->findAll();

        return $this->render('accueil/accueil.html.twig',
            compact('User'));

    }
    /*--------------------------------------------------------------------*/
    #[Route('/utilisateur', name: 'utilisateur')]
    public function utilisateur(UserRepository $userRepository): Response {


        $User = $userRepository->findAll();

        return $this->render('accueil/utilisateur.html.twig',
            compact('User'));

    }




}
