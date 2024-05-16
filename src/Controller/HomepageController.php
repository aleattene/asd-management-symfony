<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        # return new JsonResponse(([
        #   "message" => "Hello, world!",
        #    "timestamp" => date('Y-m-d H:i:s', time())
        # ]));
        return $this->render('homepage/index.html.twig');
    }
}
