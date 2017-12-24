<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenreController extends Controller
{
    public function listAction()
    {
        return $this->render('AppBundle:Genre:list.html.twig', array(
            // ...
        ));
    }

    public function addAction()
    {
        return $this->render('AppBundle:Genre:add.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('AppBundle:Genre:edit.html.twig', array(
            // ...
        ));
    }

    public function newAction()
    {
        return $this->render('AppBundle:Genre:new.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('AppBundle:Genre:delete.html.twig', array(
            // ...
        ));
    }

}
