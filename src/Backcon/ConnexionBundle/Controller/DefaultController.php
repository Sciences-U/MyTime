<?php

namespace Backcon\ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconConnexionBundle:Default:index.html.twig');
    }
}
