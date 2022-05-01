<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/api/order", name="app_order")
     */
    public function index(): Response
    {
        return $this->render('order/detail.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }
}
