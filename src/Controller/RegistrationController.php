<?php
namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class RegistrationController extends  AbstractController{
    /**
     * @Route ("/inscription", name="register")
     * @return Response
     */

    /* le problem est là*/
    public function register():Response
    {
        return $this->render("registration/register.html.twig");
    }
}