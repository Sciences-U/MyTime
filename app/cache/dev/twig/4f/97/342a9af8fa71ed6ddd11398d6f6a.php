<?php

/* BackconParametresCongresBundle:Default:avance.html.twig */
class __TwigTemplate_4f97342a9af8fa71ed6ddd11398d6f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackconDashboardBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("BackconDashboardBundle:Form:fields.html.twig", ));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_header($context, array $blocks = array())
    {
        // line 5
        echo "\t<h1>Paramètres <small>> Congrès (avancé)</small></h1>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"span4\">
\t<h3>Actions</h3>
\t<dl>
\t\t<hr>
\t\t<dd><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_congres"), "html", null, true);
        echo "\">Congrès</a></dd>
\t</dl>
</div>
<div class=\"span10\">
\t";
        // line 17
        $this->env->loadTemplate("BackconDashboardBundle:Parametres:menu.html.twig")->display(array_merge($context, array("congres" => true)));
        // line 18
        echo "\t<form action=\"#\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" >
\t";
        // line 19
        if (array_key_exists("msgOk", $context)) {
            // line 20
            echo "    <div class=\"alert-message success\">
        <a href=\"#\" class=\"close\">×</a>
        <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "msgOk"), "html", null, true);
            echo "</p>
    </div>
    ";
        } elseif (array_key_exists("msgErr", $context)) {
            // line 25
            echo "    <div class=\"alert-message error\">
        <a href=\"#\" class=\"close\">×</a>
        <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "msgErr"), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        // line 29
        echo " 
\t<fieldset>
\t    <legend>Paramètres de connexion à Partners</legend>
    \t";
        // line 32
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "url"), array("label" => "Url"));
        echo "
    \t";
        // line 33
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "login"), array("label" => "Identifiant"));
        echo "
    \t";
        // line 34
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"), array("label" => "Mot de passe"));
        echo "
    </fieldset>
    <fieldset>
\t    <legend>Debugage (Développeurs seulement)</legend>
\t    <div class=\"clearfix\">
            <div class=\"input\">
              <ul class=\"inputs-list\">
\t\t        <li>
\t\t          <label>
\t\t            ";
        // line 43
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "trace"));
        echo "
\t\t            <span>Activer la trace WSDL</span>
\t\t          </label>
\t\t        </li>
\t\t        <li>
\t\t          <label>
\t\t            ";
        // line 49
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "debug"));
        echo "
\t\t            <span>Activer le debugage par proxy</span>
\t\t          </label>
\t\t        </li>
\t\t      </ul>
\t\t    </div>
\t\t</div>
    \t";
        // line 56
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "proxyHost"), array("label" => "Adresse Proxy"));
        echo "
    \t";
        // line 57
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "proxyPort"), array("label" => "Port proxy"));
        echo "
\t    <div class=\"actions\">
          <input class=\"btn primary\" type=\"submit\" value=\"Enregistrer les modifications\" />
        </div>
    </fieldset>
\t</form>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackconParametresCongresBundle:Default:avance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
