<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ApiController
{
    #[Route('/api', name: 'app_lucky_number')]
    public function defaulAction(): Response
    {
        $data = [
            'name' => 'your Name',
            'city' => 'your City'
        ];

        return new JsonResponse(
            $data
        );
    }
}