<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class Peticion extends AbstractController
{
    #[Route('/peticion', name: 'peticion')]
    public function testRequest(Request $request)
    {
        $ip = $request -> getClientIp();
        return new Response(
            '<html><body>IP: ' . $ip . '</body></html>'
        );
    }
}