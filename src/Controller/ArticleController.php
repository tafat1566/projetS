<?php


namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


Class ArticleController extends AbstractController
{

    /**
     * @Route ("/{id}/show", name="article_show")
     * @param Article $article
     * @return Response
     */
    public function show(Article $article):Response
    {
        return $this->render("article/show.html.twig",["article"=>$article]);
    }
    /**
     * @Route("/article/new", name="article_new")
     * @param Request $request
     * @return Response
     */
    public function new (Request $request): Response
    {
        $article=new Article();
        $form=$this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $sem=$this->getDoctrine()->getManager();

            $sem->persist($article);
            $sem->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('article/new.html.twig',["form"=>$form->createView()]);
    }

    /**
     * @Route ("article/{id}/edit", name="article_edit")
     * @return Response
     */
    public function edit(Article $article, Request $request): Response
    {
        $form=$this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $sem=$this->getDoctrine()->getManager();
            $sem->flush();

            return $this->redirectToRoute('home');
        }
        return $this->render("article/edit.html.twig",["form"=>$form->createView()]);
    }

    /**
     * @Route ("article/{id}/delete", name="article_delete")
     * @param Article $article
     * @return RedirectResponse
     */
    public function delete(Article $article): RedirectResponse
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush(); //sauvgarder dans la bdd
        return $this->redirectToRoute('home');
    }
}