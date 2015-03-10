<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 08.03.2015
 * Time: 18:57
 */
class RandomController extends Controller
{
    public function indexAction($limit)
    {
        return $this->render('AppBundle:Random/Test:index.html.twig', [
            'number' => rand(1, $limit),
        ]);
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @return Response
     * @Route("/hello/{firstName}/{lastName}", name="hello")
     */
    public function testAction($firstName, $lastName)
    {
        $request = $this->getRequest();
        $page = $request->query->get('page', 1);
        return new Response('Hello, '.$firstName.' '.$lastName.' '.$page.'!');
    }
}