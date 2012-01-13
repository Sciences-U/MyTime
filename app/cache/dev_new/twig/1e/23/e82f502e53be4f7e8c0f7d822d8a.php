<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1e23e82f502e53be4f7e8c0f7d822d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <p>";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($_user_, "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!twig_test_empty($this->getAttribute($_app_, "session")))) {
            // line 6
            echo "        ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($_app_, "session"), "get", array("_security.target_path", ), "method");
            // line 7
            echo "        ";
            if (isset($context["targetUrl"])) { $_targetUrl_ = $context["targetUrl"]; } else { $_targetUrl_ = null; }
            if ((!twig_test_empty($_targetUrl_))) {
                echo "<p><a href=\"";
                if (isset($context["targetUrl"])) { $_targetUrl_ = $context["targetUrl"]; } else { $_targetUrl_ = null; }
                echo twig_escape_filter($this->env, $_targetUrl_, "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
