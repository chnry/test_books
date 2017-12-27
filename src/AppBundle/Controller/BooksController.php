<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BooksController extends Controller
{
    public function listAction()
    {
 		$user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();
        //var_dump($user);
            
                    return $this->render('AppBundle:Books:list.html.twig', array(
            // ...
        ));
    }

}
