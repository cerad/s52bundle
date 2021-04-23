<?php

namespace MyBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\RouterInterface;

class SomeService
{
    public function __construct(private EntityManagerInterface $entityManager)
    {

    }
}