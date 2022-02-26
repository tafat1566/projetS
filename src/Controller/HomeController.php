<?php


namespace App\Controller;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
	/**

	 * @Route("/",name="home") 

	 */

	public function home()
	{

        return $this->render('index.html.twig');
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