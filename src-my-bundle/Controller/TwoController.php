<?php

namespace MyBundle\Controller;

use MyBundle\Service\SomeService;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwoController extends AbstractController
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    #[Route('/two', name: 'two')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'TWO CONTROLLER',
        ]);
    }
}
