<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthorController extends Controller
{
    public function listAction()
    {
        return $this->render('AppBundle:Author:list.html.twig', array(
            // ...
        ));
    }

}
