<?php

/* BackconUtilisateurBundle:Default:index.html.twig */
class __TwigTemplate_b23e8d8f8448ba155672495b998fff3b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "BackconUtilisateurBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
