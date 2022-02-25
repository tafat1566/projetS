<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
Class ArticleController extends AbstractController
{
    /**
     * @Route("/article/new", name="article_new")
     * @param Request $request
     * @return Response
     */
    public function new (Request $request): Response
    {
        return $this->render('article/new.html.twig');
    }
}