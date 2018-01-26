<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Employee;

class MainController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
    	$em = $this->getDoctrine()->getManager();

    	$employees = $em->getRepository(Employee::class)->findAll();

    	return $this->render("main/home.html.twig", [
    		"employees" => $employees
    	]);
    }
}
