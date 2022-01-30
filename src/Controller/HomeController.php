<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
	/**

	 * @Route("/",name="home") 

	 */

	public function home()
	{
		$content="Salut";
		$number =51;
		return new Response ("$content,a=$number");

	}
    /**
     * @Route("/",name="name")
     */
    public function param($name)
    {
        $phrase ="Bonjour monsieur";
        return new Response("$phrase");
    }
}