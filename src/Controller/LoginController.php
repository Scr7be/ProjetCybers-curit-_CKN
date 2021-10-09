<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController {
    /**
     * @Route("/connection", name ="Login")
     */
    public function login()
    {
        return $this->render(
            'login.html.twig'
        );
    }
}