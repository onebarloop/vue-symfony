<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/')]
    public function defaulAction(): Response
    {
        return $this->render(
            'base.html.twig',
            ['prop' => 'Data from Controller']
        );
    }
}
