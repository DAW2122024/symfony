<?php 
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class Ejemplo1 extends AbstractController{
        #[Route('/hola', name:'hola')]
        public function NombreFuncion(): Response{
            return new Response('<html><body>Hola</body></html>');
        }
    }