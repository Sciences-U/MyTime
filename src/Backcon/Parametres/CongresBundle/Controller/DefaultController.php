<?php

namespace Backcon\Parametres\CongresBundle\Controller;

use Backcon\Parametres\CongresBundle\Entity\Partners;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Backcon\Parametres\CongresBundle\Entity\Congres;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    
	public function indexAction()
    {
    	$congres = null;   
	    $msg_ok = '';
	    $msg_err = '';		
    	
    	$congres = $this->initCongres();
	    
        $form = $this->createFormBuilder($congres)
            ->add('nom', 'text', array('trim' => true))
            ->add('dossier', 'text', array('trim' => true))
            ->add('dateDebut', 'date', array(
            	'trim' => true, 
            	'input' => 'datetime', 
            	'widget' => 'single_text', 
            	'format' => 'dd/MM/y', 
            	'pattern' => "(?:(?:0[1-9]|1[0-2])[\/\\-. ]?(?:0[1-9]|[12][0-9])|(?:(?:0[13-9]|1[0-2])[\/\\-. ]?30)|(?:(?:0[13578]|1[02])[\/\\-. ]?31))[\/\\-. ]?(?:19|20)[0-9]{2}"))
            ->add('dateFin', 'date', array(
            	'trim' => true, 
            	'input' => 'datetime', 
            	'widget' => 'single_text', 
            	'format' => 'dd/MM/y', 
            	'pattern' => "(?:(?:0[1-9]|1[0-2])[\/\\-. ]?(?:0[1-9]|[12][0-9])|(?:(?:0[13-9]|1[0-2])[\/\\-. ]?30)|(?:(?:0[13578]|1[02])[\/\\-. ]?31))[\/\\-. ]?(?:19|20)[0-9]{2}"))
            //->add('logo', 'file', array('trim' => true, 'required' => false))
            ->add('contactMail', 'email', array('trim' => true))
            ->add('urlSite', 'url', array('trim' => true))
            ->add('langueDefaut', 'choice', array('choices' => array('fr' => 'Français'),'trim' => true))
            ->getForm();
            
	    $request = $this->container->get('request');
		
	    if ($request->getMethod() == 'POST') {
	    	$form->bindRequest($request);
	    	// On récupère le service validator.
	        $validator = $this->get('validator');
	        
	        // On déclenche la validation.
	        $errorList = $validator->validate($congres);
	        $nbErr = $errorList->count();
			//var_dump($errorList->count());
			
	    	if ($nbErr == 0) {
	    		$em = $this->getDoctrine()->getEntityManager();
				$em->persist($congres);
				$em->flush();
				$msg_ok = 'Le congrès a été modifié avec succès !';
			} else {
				var_dump($errorList);
				$msg_err = '<strong>';
				$msg_err .= ($nbErr > 1) ? $nbErr.' erreurs' : $nbErr.' erreur';
				$msg_err .= ' : </strong><br />';
			}
		}
		// $this->get('session')->setFlash('Erreur formulaire','warning');
		$parametres = array(
            'form' => $form->createView()
		);
		if($msg_err != '')
			$parametres['msgErr'] = $msg_err;
		elseif($msg_ok != '')
			$parametres['msgOk'] = $msg_ok;

        return $this->render('BackconParametresCongresBundle:Default:index.html.twig', $parametres);
    }
    
	public function avanceAction()
    {
    	$congres = null;   
	    $msg_ok = '';
	    $msg_err = '';		
    	
    	$congres = $this->initCongres();
	    
        $form = $this->createFormBuilder($congres->getPartners())
            ->add('url', 'url', array('trim' => true))
            ->add('login', 'text', array('trim' => true))
            ->add('password', 'text', array('trim' => true))
            ->add('debug', 'checkbox', array('required' => false))
            ->add('trace', 'checkbox', array('required' => false))
            ->add('proxyHost', 'text', array('trim' => true))
            ->add('proxyPort', 'integer')
            ->getForm();
            
	    $request = $this->container->get('request');
		
	    if ($request->getMethod() == 'POST') {
	    	$form->bindRequest($request);
	    	// On récupère le service validator.
	        $validator = $this->get('validator');
	        
	        // On déclenche la validation.
	        $errorList = $validator->validate($congres);
	        $nbErr = $errorList->count();
			//var_dump($errorList->count());
			
	    	if ($nbErr == 0) {
	    		$em = $this->getDoctrine()->getEntityManager();
				$em->persist($congres);
				$em->flush();
				$msg_ok = 'Le congrès a été modifié avec succès !';
			} else {
				var_dump($errorList);
				$msg_err = '<strong>';
				$msg_err .= ($nbErr > 1) ? $nbErr.' erreurs' : $nbErr.' erreur';
				$msg_err .= ' : </strong><br />';
			}
		}
		// $this->get('session')->setFlash('Erreur formulaire','warning');
		$parametres = array(
            'form' => $form->createView()
		);
		if($msg_err != '')
			$parametres['msgErr'] = $msg_err;
		elseif($msg_ok != '')
			$parametres['msgOk'] = $msg_ok;

        return $this->render('BackconParametresCongresBundle:Default:avance.html.twig', $parametres);
    }
    
    public function initCongres()
    {
    	$congres = array(); 
	    $tentative = 0;
    	
    	$em = $this->getDoctrine()->getEntityManager();
    	$congres = $em->getRepository('BackconParametresCongresBundle:Congres')->findAll();
	    
    	while (!$congres) {
	        $monCongres = new Congres();
		    $monCongres->setNom('Nom du congrès');
        	$monCongres->setDateDebut(new \DateTime('today'));
        	$monCongres->setDateFin(new \DateTime('tomorrow'));
        	$monCongres->setLogo('bundles\backcondashboard\images\blank.jpg');
        	$monCongres->setContactMail('mail@site.com');
        	$monCongres->setUrlSite('http://sitecongres.com');
        	$monCongres->setLangueDefaut('fr');
        	$monCongres->setPartners($partners);
		
		    $em = $this->getDoctrine()->getEntityManager();
		    $em->persist($monCongres);
		    $em->flush();
		    
		    $congres[0] = $monCongres;
	    }
	    
	    if (is_array($congres) && sizeof($congres) != 1) {
	    	throw new UnexpectedValueException('La valeur attendue en retour pour la génération de l\'entité congrès est incorrect');
	    } else if ($congres[0]->getPartners() == Null) {
	    	$partners = new Partners();
    		$partners->setUrl('http://ailleurs.mb3m.fr/partners/1.0');
    		$partners->setDebug(false);
    		$partners->setTrace(false);
    		$partners->setLogin('login');
    		$partners->setPassword('password');
    		$partners->setProxyHost('localhost');
    		$partners->setProxyPort(8888);
	    	
	    	$em = $this->getDoctrine()->getEntityManager();
		    $em->persist($partners);
		    $em->flush();
		    
		    $congres[0]->setPartners($partners);
	    }
	    return $congres[0];
    }
}
