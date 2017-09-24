<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Blog controller.
 */
class PostController extends Controller
{
    /**
     * @Route("/{id}", name="postpage")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('BlogBundle:Post')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $this->render('BlogBundle:Post:show.html.twig', array(
            'post'      => $blog,
        ));
    }
}
