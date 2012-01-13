<?php

namespace Backcon\Parametres\GeneralBundle\Controller;

use Backcon\UtilisateurBundle\Entity\Utilisateur;

use FOS\UserBundle\Entity\UserManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email;


class UtilisateursController extends Controller
{
    
	public function indexAction()
    {
    	$user = new Utilisateur();
    	
    	$form = $this->createFormBuilder($user)
            ->add('username', 'text', array('trim' => true))
            ->add('password', 'text', array('trim' => true, 'required' => true))
            ->add('email', 'email', array('trim' => true))
            ->getForm();
    	
        return $this->render('BackconParametresGeneralBundle:Utilisateurs:index.html.twig', array(
        	'form' => $form->createView()
        ));
    }
    
    public function ajouterAction()
    {
	   	$user = new Utilisateur();
	   	
	   	$form = $this->createFormBuilder($user)
            ->add('username', 'text', array('trim' => true))
            ->add('password', 'text', array('trim' => true, 'required' => true))
            ->add('email', 'email', array('trim' => true))
            ->getForm();
	   
	   	$request = $this->container->get('request');
	   	$return = array("response" => 500, 'erreur' => "Une erreur inconnue est survenue");
		
	    if ($request->getMethod() == 'POST') {
	    	$form->bindRequest($request);
	    	$user = $form->getData();
	    	
	    	$username = $request->request->get('username');
		   	$password = $request->request->get('password');
		   	$email = $request->request->get('email');
		   	$active = $request->request->get('active');
		   	
		    $emailConstraint = new Email();
	    	$emailConstraint->message = 'L\'adresse email est incorrect';
			$errEmail = count($this->get('validator')->validateValue($email, $emailConstraint));
	    	
			$listeErreurs = array();
		   	if ($username == '') {
		   		$listeErreurs[] = array("id" => "form_username", "msg" => "Vous devez fournir un nom d'utilisateur");
		   	} 
		   	
		   	if ($password == '') {
		   		$listeErreurs[] = array("id" => "form_password", "msg" => "Vous devez fournir un nom mot de passe");
		   	} else if (strlen($password) < 5) {
		   		$listeErreurs[] = array("id" => "form_password", "msg" => "Le mot de passe doit faire plus de 5 caractères");
		   	}
		   	
		   	if ($email == '') {
		   		$listeErreurs[] = array("id" => "form_email", "msg" => "Vous devez fournir une adresse email");
		   	} else if ($errEmail != 0) {
		   		$listeErreurs[] = array("id" => "form_email", "msg" => "L'adresse email est incorrect");
		   	} 
		   	
		   	if (sizeof($listeErreurs) > 0) {
		   		$return = array("response" => 400, "erreurs" => $listeErreurs);
		   	} else {
		   		try {
			   		$user = $this->get('fos_user.util.user_manipulator')->create($username, $password, $email, $active, 0);
		      		$return = array("response" => 200,  "url" => $this->container->get('router')->generate('parametres_general_utilisateurs_lister'));
		   		} catch(\Exception $e) {
		   			$return = array("response" => 500, 'erreur' => "<strong>Attention : </strong>L'adresse email fournie a déjà été utilisée");
		   		}
		   	}
	    } else {
	    	$return = array("response" => 500, 'erreur' => "Les paramètres reçus sont incorrects");
	    }
		
	   	$return = json_encode($return);
	   	return new Response($return,200);
    }
    
    public function listerAction($max)
    {
    	$userManager = $this->get('fos_user.user_manager');
    	$users = $userManager->findUsers();
    	
    	return $this->render('BackconParametresGeneralBundle:Utilisateurs:lister.html.twig', array(
        	'users' => $users
        ));
    }
    
    public function etatAction(){
    	$request = $this->container->get('request');
	   	$return = array("response" => 500, 'erreur' => "Une erreur inconnue est survenue");
		
	    if ($request->getMethod() == 'POST') {	
	    	$username = $request->request->get('username');
	    	$etat = (intval($request->request->get('etat')) == 1) ? 1:0;
		   	$userManager = $this->get('fos_user.user_manager');
	    	$user = $userManager->findUserBy(array('username' => $username));
	    	
	    	if (!$user) {
	    		$return = array("response" => 500, 'erreur' => 'L\'utilisateur <strong>'.$username.'</strong> n\'existe pas ou plus');
	    	} else {
	    		try {
	    			$user->setEnabled($etat);
					$userManager->updateUser($user);
	    			$return = array("response" => 200, 'etat' => $user->isEnabled(), 'expire' => $user->isExpired());
	    		} catch(\Exception $e) {
		   			$return = array("response" => 500, 'erreur' => "<strong>Erreur : </strong>Impossible de modifier l'utilisateur selectionné");
		   		}
	    	}
    	} else {
	    	$return = array("response" => 500, 'erreur' => "Les paramètres reçus sont incorrects");
	    }
	    
	    $return = json_encode($return);
	   	return new Response($return,200);
    }
    
	public function supprimerAction()
    {
    	$request = $this->container->get('request');
	   	$return = array("response" => 500, 'erreur' => "Une erreur inconnue est survenue");
		
	    if ($request->getMethod() == 'POST') {	    	
	    	$username = $request->request->get('username');
		   	$userManager = $this->get('fos_user.user_manager');
	    	$user = $userManager->findUserBy(array('username' => $username));
	    	
	    	if (!$user) {
	    		$return = array("response" => 500, 'erreur' => 'L\'utilisateur <strong>'.$username.'</strong> n\'existe pas ou plus');
	    	} else {
	    		try {
	    			$userManager->deleteUser($user);
	    			$return = array("response" => 200);
	    		} catch(\Exception $e) {
		   			$return = array("response" => 500, 'erreur' => "<strong>Erreur : </strong>Impossible de supprimer l'utilisateur selectionné");
		   		}
	    	}
    	} else {
	    	$return = array("response" => 500, 'erreur' => "Les paramètres reçus sont incorrects");
	    }
		
	   	$return = json_encode($return);
	   	return new Response($return,200);
    }
}
