<?php

namespace Backcon\Parametres\PrestationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconParametresPrestationBundle:Default:index.html.twig');
    }
}
