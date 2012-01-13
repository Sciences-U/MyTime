<?php

/* BackconDashboardBundle:Parametres:menu.html.twig */
class __TwigTemplate_32f0f778d7c8f4eef6c3c53a9335df68 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"tabs\">
    <li";
        // line 2
        if (array_key_exists("general", $context)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_general"), "html", null, true);
        echo "\">Général</a></li>
    <li";
        // line 3
        if (array_key_exists("congres", $context)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_congres"), "html", null, true);
        echo "\">Congrès</a></li>
    <li";
        // line 4
        if (array_key_exists("reservation", $context)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_reservation"), "html", null, true);
        echo "\">Réservation</a></li>
    <li";
        // line 5
        if (array_key_exists("prestation", $context)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_prestation"), "html", null, true);
        echo "\">Prestation</a></li>
    <li";
        // line 6
        if (array_key_exists("hotellerie", $context)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_hotellerie"), "html", null, true);
        echo "\">Hôtellerie</a></li>
    <li";
        // line 7
        if (array_key_exists("inscription", $context)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_inscription"), "html", null, true);
        echo "\">Inscription</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "BackconDashboardBundle:Parametres:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
