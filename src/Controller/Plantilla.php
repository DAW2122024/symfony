<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Plantilla extends AbstractController
{
    #[Route('/holaNombre/{nombre?desconocido}', name: 'holaNombre')]
    public function holaNombre($nombre)
    {
        $edad = 1;
        return $this->render(
            'hola.html.twig',
            array(
                'nombre' => $nombre,
                'edad' => $edad
            )
        );
    }

    #[Route('/division/{num1?1}/{num2?2}', name: 'division')]
    public function division($num1, $num2)
    {
        if ($num2 != 0) {
            return $this->render(
                'division.html.twig',
                array(
                    'num1' => $num1,
                    'num2' => $num2
                )
            );
        } else {
            return $this->render(
                'division.html.twig',
                array(
                    'num1' => $num1,
                    'num2' => null
                )
            );
        }
    }

    #[Route('/tabla', name: 'tabla')]
    public function tabla()
    {
        return $this->render(
            'tabla.html.twig',
            [
                "filas" => [
                    ["dni" => 5, "nombre" => "Juan"],
                    ["dni" => 7, "nombre" => "Pedro"],
                    ["dni" => 12, "nombre" => "Manuel"]
                ]
            ]
        );
    }
}
