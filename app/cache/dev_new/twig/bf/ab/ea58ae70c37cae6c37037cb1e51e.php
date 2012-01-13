<?php

/* BackconDashboardBundle:Parametres:hotellerie.html.twig */
class __TwigTemplate_bfabea58ae70c37cae6c37037cb1e51e extends Twig_Template
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
        echo "\t<h1>Paramètres <small>> Hôtellerie</small></h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"span4\">
\t<h3>Actions</h3>
\t<dl>
\t\t<hr>
\t\t<dd><a href=\"";
        // line 12
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
        // line 20
        $this->env->loadTemplate("BackconDashboardBundle:Parametres:menu.html.twig")->display(array_merge($context, array("hotellerie" => true)));
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "BackconDashboardBundle:Parametres:hotellerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
