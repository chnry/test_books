<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
	    // get the login error if there is one
	    $error = $authUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authUtils->getLastUsername();

        return $this->render('AppBundle:Security:login.html.twig', array(
	        'last_login'	=> $lastUsername,
	        'error'         => $error,
        ));
    }
    
    /*
    public function logoutAction()
	{
		$this->tokenStorage->setToken(null);
		return $this->redirectToRoute('login');
	}
	*/

}

