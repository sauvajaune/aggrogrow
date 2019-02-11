<?php
/**
 * Created by PhpStorm.
 * User: mynameis
 * Date: 11/02/2019
 * Time: 15:56
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     *
     */
    public function index()
    {
        return $this->render('front/index.html.twig');
    }
}