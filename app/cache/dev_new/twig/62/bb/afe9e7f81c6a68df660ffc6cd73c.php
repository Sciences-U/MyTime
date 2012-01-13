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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->setTheme($_form_, array("BackconDashboardBundle:Form:fields.html.twig", ));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Editer</a></dd>
\t\t<hr>
\t\t<dd>Liste des utilisateurs</dd>
\t\t<dd>Liste des groupes</dd>
\t\t<dd>Liste des utilisateurs</dd>
\t</dl>
</div>
<div class=\"span10\">
\t";
        // line 21
        $this->env->loadTemplate("BackconDashboardBundle:Parametres:menu.html.twig")->display(array_merge($context, array("congres" => true)));
        // line 22
        echo "\t<form action=\"#\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " method=\"POST\" >
\t<fieldset>
\t    <legend>Paramètres du congrès</legend>
\t    ";
        // line 25
        if (array_key_exists("msgOk", $context)) {
            // line 26
            echo "\t    <div class=\"alert-message success\">
\t        <a href=\"#\" class=\"close\">×</a>
\t        <p>";
            // line 28
            if (isset($context["msgOk"])) { $_msgOk_ = $context["msgOk"]; } else { $_msgOk_ = null; }
            echo twig_escape_filter($this->env, $_msgOk_, "html", null, true);
            echo "</p>
\t    </div>
\t    ";
        } elseif (array_key_exists("msgErr", $context)) {
            // line 31
            echo "\t    <div class=\"alert-message error\">
\t        <a href=\"#\" class=\"close\">×</a>
\t        <p>";
            // line 33
            if (isset($context["msgErr"])) { $_msgErr_ = $context["msgErr"]; } else { $_msgErr_ = null; }
            echo twig_escape_filter($this->env, $_msgErr_, "html", null, true);
            echo "</p>
\t    </div>
\t    ";
        }
        // line 36
        echo "    \t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($_form_, "nom"), array("label" => "Nom du congrès"));
        echo "
    \t";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($_form_, "dateDebut"), array("label" => "Date début"));
        echo "
    \t";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($_form_, "dateFin"), array("label" => "Date fin"));
        echo "
    \t";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($_form_, "logo"), array("label" => "Logo"));
        echo "
    \t";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($_form_, "urlSite"), array("label" => "Url du site"));
        echo "
    \t";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($_form_, "contactMail"), array("label" => "Email de contact"));
        echo "
    \t";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($_form_, "langueDefaut"), array("label" => "Langue par défaut"));
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
