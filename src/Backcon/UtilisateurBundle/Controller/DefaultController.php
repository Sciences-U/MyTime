<?php

namespace Backcon\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconUtilisateurBundle:Default:index.html.twig');
    }
}
