<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Enquiry;
use BlogBundle\Form\EnquiryType;

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
	public function contactAction(Request $request)
	{
	    $enquiry = new Enquiry();

	    $form = $this->createForm(EnquiryType::class, $enquiry);

	    if ($request->isMethod($request::METHOD_POST)) {
	      $form->handleRequest($request);

	        if ($form->isValid()) {
	            // Perform some action, such as sending an email

	            // Redirect - This is important to prevent users re-posting
	            // the form if they refresh the page
	            return $this->redirect($this->generateUrl('contact'));
	        }
	    }

	    return $this->render('BlogBundle:Page:contact.html.twig', array(
	        'form' => $form->createView()
	    ));
	}
}
