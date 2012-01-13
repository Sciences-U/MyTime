<?php

namespace Backcon\Parametres\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconParametresInscriptionBundle:Default:index.html.twig');
    }
}
