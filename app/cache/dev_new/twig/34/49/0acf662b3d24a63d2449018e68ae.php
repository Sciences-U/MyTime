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
        if (isset($context["glob_nom_congres"])) { $_glob_nom_congres_ = $context["glob_nom_congres"]; } else { $_glob_nom_congres_ = null; }
        echo twig_escape_filter($this->env, $_glob_nom_congres_, "html", null, true);
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
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_app_, "user")) ? ($this->getAttribute($this->getAttribute($_app_, "user"), "username")) : ("Anonyme")), "html", null, true);
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
\t\t\t";
        // line 18
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 19
            echo "\t\t\t<div class=\"";
            if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
            echo twig_escape_filter($this->env, $_flash_, "html", null, true);
            echo "\">
\t\t\t    ";
            // line 20
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, $_key_, "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "            <button class=\"btn danger\" type=\"submit\">Se d&eacute;connecter</button>
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
