<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bd93329a469c8708c8a23313afd2523d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["confirmationUrl"])) { $_confirmationUrl_ = $context["confirmationUrl"]; } else { $_confirmationUrl_ = null; }
        echo $this->env->getExtension('translator')->trans("registration.email", array("%username%" => $this->getAttribute($_user_, "username"), "%confirmationUrl%" => $_confirmationUrl_), "FOSUserBundle");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
