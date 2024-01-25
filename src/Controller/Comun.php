<?php // src/Controller/Ejemplo2.php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;

    class Comun extends AbstractController {
        #[Route('/holaComun', name:'holaComun')]
        public function holaComun() {
            return new Response('<html><body>HolaComun</body></html>');
    }
}