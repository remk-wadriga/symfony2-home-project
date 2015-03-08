<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        return $this->render('AppBundle:Random:index.html.twig', [
            'number' => rand(1, $limit),
        ]);
    }
} 