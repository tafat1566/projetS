<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
	/**

	 * @Route("/",name="home") 

	 */

	public function home()
	{
        $tabs=[1,2,3,4,5];
        $bool = true;
        return $this->render('index.html.twig',["var"=>"https://translate.google.com/",'tabs'=>$tabs,'bool'=>$bool] );

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