<?php

namespace Backcon\Parametres\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconParametresGeneralBundle:Default:index.html.twig');
    }
}
