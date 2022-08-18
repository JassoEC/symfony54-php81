<?php

namespace App\Controller\Hello;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
  #[Route('/hello', name: 'hello-controller', methods: ['GET'])]
  public function __invoke(): Response
  {
    return $this->render('hello/hello.html.twig');
  }
}
