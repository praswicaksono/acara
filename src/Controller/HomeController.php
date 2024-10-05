<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class HomeController extends AbstractController
{
    #[Route('/', 'home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('page/home.html.twig');
    }
}
