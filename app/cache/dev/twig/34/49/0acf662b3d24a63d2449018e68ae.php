<?php

/* BackconDashboardBundle::header.html.twig */
class __TwigTemplate_34490acf662b3d24a63d2449018e68ae extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"topbar\">
      <div class=\"fill\">
        <div class=\"container\">
          <a class=\"brand\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_homepage"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "glob_nom_congres"), "html", null, true);
        echo "</a>
          <ul class=\"nav\">
            <li><a href=\"#\">R&eacute;servations</a></li>
            <li><a href=\"#about\">Prestations</a></li>
            <li><a href=\"#contact\">H&ocirc;tellerie</a></li>
            <li><a href=\"#contact\">Inscriptions</a></li>
          </ul>
          <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\" class=\"pull-right\">
\t\t\t";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "\t\t\t    <a class=\"input-small\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">Connect&eacute; : ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonyme")), "html", null, true);
            echo "</a>&nbsp;&nbsp;&nbsp;
\t\t\t";
        } else {
            // line 15
            echo "\t\t\t    <a class=\"input-small\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Vous devez vous connecter !</a>&nbsp;&nbsp;&nbsp;
\t\t\t";
        }
        // line 17
        echo "\t\t\t
            <button class=\"btn danger\" type=\"submit\">Se d&eacute;connecter</button>
          </form>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "BackconDashboardBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
