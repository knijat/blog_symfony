<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{

    /**
     * @Route("/admin",name="admin")
     * @return Response
     */
    public function index()
    {
        return $this->render("admin/dashboard.html.twig");

    }

}

?>