<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PublicController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('public/home.html.twig');
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('public/contact.html.twig');
    }
}
