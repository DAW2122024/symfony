<?php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\Clock\Clock;
    use Symfony\Component\Clock\MockClock;

    class Ejemplo2 extends AbstractController{
        #[Route('/hola2', name:'hola2')]
        public function NombreFuncion(): Response{
            Clock::set(new MockClock()); //Configuración del reloj, no es obligatorio, pero si más rápido
            $clock = Clock::get(); //Instanciamos un reloj
            //$clock->withTimeZone('Europe/Madrid'); //Podemos marcar la zona
            $now = $clock -> now(); //Cogemos la hora actual
            $dia = $now -> format('h:i:s'); //La guardamos en una variable
            $clock -> sleep(2.5); //Espera de 2,5 segundos
            $now = $clock->now(); // Volvemos a coger la hora actual
            $dia = $dia . "->" . $now -> format('h:i:s'); //Añadimos a la variable la nueva hora
            return new Response("<html><body>$dia</body></html>");
        }

        #[Route("/producto/{num1?3}/{num2?2}", name:'producto')]
        function producto($num1, $num2) {
        // function producto($num1=3, $num2=2){ // Establecer valores por defecto
            $producto = $num1 * $num2;
            return new Response($producto);
        }

        #[Route("/calculos/{num1?2}", name:"calculos")]
        function calculos($num1) {
            if ($num1 > 0) {
                $cuadrado = $num1 * $num1;
                $cubo = $num1 * $num1 * $num1;
                // return new Response(
                //     "Cuadrado: " . $cuadrado . "\nCubo: " . $cubo
                // );
                return $this->redirectToRoute("holaComun"); // Redirección a otra función. Esta redirección puede realizarse a cualquiera de las clases, aunque estén en otro archivo
                // return $this->redirectToRoute("producto", array("num1"=>8,"num2"=>9)); // Otra redirección, esta vez con los parámetros que hay que introducir
            } else {
                return new Response("No queremos trabajar con números no positivos.");
            }

        }
    }

