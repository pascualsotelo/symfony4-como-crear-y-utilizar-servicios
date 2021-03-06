<?php
namespace App\Controller;

use App\Service\DniGenerator;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @param DniGenerator $dniGenerator
     * @return Response
     */
    public function index(DniGenerator $dniGenerator)
    {
        $dni = $dniGenerator->dni();

        return new Response(
            '<html><body><h1>Generador aleatorio de DNI</h1><h2>DNI: '.$dni.'</h2></body></html>'
        );
    }
}
