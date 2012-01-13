<?php

/* BackconDashboardBundle:Utilisateur:profile.html.twig */
class __TwigTemplate_33383a6c09b2f9b672e62aae221c8949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_header_action' => array($this, 'block_page_header_action'),
            'page_header' => array($this, 'block_page_header'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 4
    public function block_page_header_action($context, array $blocks = array())
    {
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Mon compte ";
        $this->displayBlock('page_header_action', $context, $blocks);
        echo "</h1>
";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function getTemplateName()
    {
        return "BackconDashboardBundle:Utilisateur:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
