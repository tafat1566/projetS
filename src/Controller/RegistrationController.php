<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use App\Service\Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RegistrationController extends  AbstractController{
    /**
     * @Route ("/inscription", name="register")
     * @param  Request $request
     * @return Response
     */

    public function register(Request $request):Response
    {
        $user =new User();
        $form = $this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return $this->render('registration/register.html.twig',['form'=>$form->createView()]);
    }













    /* le problem est là*/
    /*public function register(Request $request):Response
    {
        $user = new User();
        $form=$this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted())
        {
            $em= $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render("registration/register.html.twig",['form'=>$form->createView()]);
    }*/
}