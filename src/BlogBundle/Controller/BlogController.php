<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{

    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
