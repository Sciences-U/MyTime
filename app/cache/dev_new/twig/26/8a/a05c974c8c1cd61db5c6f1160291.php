<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_268aa05c974c8c1cd61db5c6f1160291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_app_, "user")) ? ($this->getAttribute($this->getAttribute($_app_, "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
