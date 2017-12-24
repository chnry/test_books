<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function listAction()
    {
        return $this->render('AppBundle:Profile:list.html.twig', array(
            // ...
        ));
    }

}
