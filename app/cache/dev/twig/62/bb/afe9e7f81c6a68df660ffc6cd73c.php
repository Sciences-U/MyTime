<?php

/* BackconParametresCongresBundle:Default:index.html.twig */
class __TwigTemplate_62bbafe9e7f81c6a68df660ffc6cd73c extends Twig_Template
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
        echo "\t<h1>Paramètres <small>> Congrès</small></h1>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_congres_avance"), "html", null, true);
        echo "\">Congrès avancé</a></dd>
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
\t<fieldset>
\t    <legend>Informations sur le congrès</legend>
\t    ";
        // line 21
        if (array_key_exists("msgOk", $context)) {
            // line 22
            echo "\t    <div class=\"alert-message success\">
\t        <a href=\"#\" class=\"close\">×</a>
\t        <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "msgOk"), "html", null, true);
            echo "</p>
\t    </div>
\t    ";
        } elseif (array_key_exists("msgErr", $context)) {
            // line 27
            echo "\t    <div class=\"alert-message error\">
\t        <a href=\"#\" class=\"close\">×</a>
\t        <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "msgErr"), "html", null, true);
            echo "</p>
\t    </div>
\t    ";
        }
        // line 32
        echo "    \t";
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "nom"), array("label" => "Nom du congrès"));
        echo "
    \t";
        // line 33
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "dossier"), array("label" => "Id du dossier Travel"));
        echo "
    \t";
        // line 34
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "dateDebut"), array("label" => "Date début"));
        echo "
    \t";
        // line 35
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "dateFin"), array("label" => "Date fin"));
        echo "
    \t";
        // line 37
        echo "    \t";
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "urlSite"), array("label" => "Url du site"));
        echo "
    \t";
        // line 38
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "contactMail"), array("label" => "Email de contact"));
        echo "
    \t";
        // line 39
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "langueDefaut"), array("label" => "Langue par défaut"));
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
        return "BackconParametresCongresBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
