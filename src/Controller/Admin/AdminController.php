<?php

namespace App\Controller\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/admin")
 * class AdminController
 * @package App\Controller\Admin
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/home", name="admin")
     */
    public function admin()
    {
        return $this->render("admin/home.html.twig");

    }
}