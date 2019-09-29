<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainPage extends Controller
{
    /**
     * @Route("/")
     */

    public function main()
    {
        return $this->render('main/main.html.twig');
    }
}

?>
