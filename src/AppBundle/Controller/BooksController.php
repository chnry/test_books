<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BooksController extends Controller
{
    public function listAction()
    {
        return $this->render('AppBundle:Books:list.html.twig', array(
            // ...
        ));
    }

}
