<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Sesion extends AbstractController
{
    #[Route("/sesion", name: "sesion")]
    public function sesionSet(SessionInterface $session)
    {
        $session -> set("var", 100);
        return $this -> redirectToRoute("sesionGet");
    }
    #[Route("/sesionGet", name: "sesionGet")]
    public function sesionGet(SessionInterface $session)
    {
        $var = $session -> get("var");
        return new Response('<html><body>' . $var . '</body></html>');
    }
}
