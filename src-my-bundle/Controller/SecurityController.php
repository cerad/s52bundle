<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/security', name: 'security')]
    public function index(): Response
    {
        // Will blow up if the locator is not injected
        $url = $this->generateUrl('home');
        dump($url);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'SECURITY CONTROLLER',
        ]);
    }
}
