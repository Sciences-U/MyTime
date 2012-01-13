<?php

namespace Backcon\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackconDashboardBundle:Default:index.html.twig');
    }
}
