<?php
// src/AppBundle/Controller/SecurityController.php
namespace AppBundle\Controller;

// ...
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last email entered by the user
        //$lastUsername = $authenticationUtils->getLastUser();

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                // 'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }
}