<?php

/* BackconDashboardBundle:Default:index.html.twig */
class __TwigTemplate_20b4f1ff948c891ee4fbc3974ee1a95c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div>contenu dashboard</div>
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
