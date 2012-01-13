<?php

namespace Backcon\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BackconUtilisateurBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
