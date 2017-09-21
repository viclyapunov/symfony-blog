<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PageController extends Controller
{
	/**
     * @Route("/home", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Page:index.html.twig');
    }
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('BlogBundle:Page:about.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('BlogBundle:Page:contact.html.twig');
    }
}
