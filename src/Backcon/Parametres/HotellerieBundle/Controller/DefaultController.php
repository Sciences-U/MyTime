<?php

namespace Backcon\Parametres\HotellerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconParametresHotellerieBundle:Default:index.html.twig');
    }
}
