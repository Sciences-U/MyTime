<?php

namespace Backcon\Parametres\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconParametresReservationBundle:Default:index.html.twig');
    }
}
