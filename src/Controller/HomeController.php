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
     * @return Response

	 */

	public function home()
	{

        return $this->render('index.html.twig');
    }


}