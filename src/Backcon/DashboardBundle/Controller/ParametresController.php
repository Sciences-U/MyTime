<?php

namespace Backcon\DashboardBundle\Controller;

use Symfony\Component\Serializer\Exception\UnexpectedValueException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParametresController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconDashboardBundle:Parametres:general.html.twig');
    }
    
	public function reservationAction()
    {
        return $this->render('BackconDashboardBundle:Parametres:reservation.html.twig');
    }
    
	public function prestationAction()
    {
        return $this->render('BackconDashboardBundle:Parametres:prestation.html.twig');
    }
    
	public function hotellerieAction()
    {
        return $this->render('BackconDashboardBundle:Parametres:hotellerie.html.twig');
    }
    
	public function inscriptionAction()
    {
        return $this->render('BackconDashboardBundle:Parametres:inscription.html.twig');
    }
   
}
