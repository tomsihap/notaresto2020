<?php

namespace App\Controller;

use App\Service\RandomStringGeneratorService;
use App\Service\SayHelloService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{


    /**
     * On importe des services dans le constructeur pour les utiliser plus tard
     * dans la classe.
     * On peut aussi les injecter en autowiring dans les attributs de méthodes directement
     */
    private $sayHelloService;
    private $randomStringGeneratorService;

    public function __construct(SayHelloService $sayHelloService,
                                RandomStringGeneratorService $randomStringGeneratorService) {
        $this->sayHelloService = $sayHelloService;
        $this->randomStringGeneratorService = $randomStringGeneratorService;
    }

    /**
     * @Route("/", name="app_index")
     */
    public function index()
    {

        /**
         * Exemples d'utilisation des services
         */
        $this->sayHelloService->hello();
        dump( $this->randomStringGeneratorService->generate() );
        dump( $this->randomStringGeneratorService->generateInt());
        dd($this->randomStringGeneratorService->generateAlpha());

        return $this->render('app/index.html.twig');
    }
}
