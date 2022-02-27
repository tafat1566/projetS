<?php


namespace App\Controller;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    /**

	 * @Route("/",name="home")
     * @param ArticleRepository $articleRepository

	 */

	public function home(ArticleRepository $articleRepository)
	{

        return $this->render('index.html.twig',["articles"=>$articleRepository->findBy(["published"=>1])]);
    }

    /**

     * @Route("/params/{name}",name="name",defaults={"name":"TAFAT Aghiles"},methods={"GET"})

     */
    public function params($name)
    {
        $phrase ="Bonjour Monsieur";
        return new Response("$name");
    }
}