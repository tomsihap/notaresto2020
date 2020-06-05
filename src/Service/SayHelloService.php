<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\Mailer;

/**
 * Service qui ajoute un message aux messages flash
 * Ce service a besoin d'utiliser le service Session de sorte à utiliser les messages flashes,
 * on injecte d'autres services dans un service depuis le constructeur
 */
class SayHelloService {

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function hello() {
        $this->session->getFlashBag()->add('info', 'hello user !');
    }

    public function add(int $a, int $b) {
        return $a+$b;
    }

}