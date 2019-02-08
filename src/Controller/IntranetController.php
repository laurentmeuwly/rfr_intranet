<?php

namespace App\Controller;
    
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IntranetController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="intranet_index")
     **/
    public function index(Request $request): Response
    {
        return $this->render('base.html.twig');
    }
}