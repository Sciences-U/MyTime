<?php

/* BackconDashboardBundle:Default:index.html.twig */
class __TwigTemplate_20b4f1ff948c891ee4fbc3974ee1a95c extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Tableau de bord</h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"span10\">
\t<div class=\"gadget-content\">
\t\t<div class=\"hero-unit\">
\t        <h1>Bienvenue</h1>
\t        <p>Bientôt sur votre tableau de bord la possibilité d'ajouter des gadgets pour vous aider dans la gestion de votre congrès</p>
\t        <!--<p><a class=\"btn primary large\">Learn more »</a></p>-->
\t    </div>
\t</div>
</div>
<div class=\"span4\">
\t<h3>Menu rapide</h3>
\t<dl>
\t\t<hr>
\t\t<dd><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_general"), "html", null, true);
        echo "\">Paramètres</a></dd>
\t\t<hr>
\t\t<dd>Liste des utilisateurs</dd>
\t\t<dd>Liste des groupes</dd>
\t\t<dd>Liste des utilisateurs</dd>
\t</dl>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackconDashboardBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
