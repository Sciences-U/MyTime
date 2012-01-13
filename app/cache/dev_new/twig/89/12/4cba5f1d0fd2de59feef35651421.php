<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_89124cba5f1d0fd2de59feef35651421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Well done!</h1>
    ";
        // line 6
        if (isset($context["is_writable"])) { $_is_writable_ = $context["is_writable"]; } else { $_is_writable_ = null; }
        if ($_is_writable_) {
            // line 7
            echo "    <h2>Your distribution is configured!</h2>
    ";
        } else {
            // line 9
            echo "    <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
    ";
        }
        // line 11
        echo "    <h3>
        <span>
            ";
        // line 13
        if (isset($context["is_writable"])) { $_is_writable_ = $context["is_writable"]; } else { $_is_writable_ = null; }
        if ($_is_writable_) {
            // line 14
            echo "                Your parameters.ini has been overwritten with these parameters (in <em>";
            if (isset($context["ini_path"])) { $_ini_path_ = $context["ini_path"]; } else { $_ini_path_ = null; }
            echo twig_escape_filter($this->env, $_ini_path_, "html", null, true);
            echo "</em>):
            ";
        } else {
            // line 16
            echo "                Your parameters.ini file is not writeable! Here are the parameters you can copy and paste in <em>";
            if (isset($context["ini_path"])) { $_ini_path_ = $context["ini_path"]; } else { $_ini_path_ = null; }
            echo twig_escape_filter($this->env, $_ini_path_, "html", null, true);
            echo "</em>:
            ";
        }
        // line 18
        echo "        </span>
    </h3>

    <textarea class=\"symfony-configuration\">";
        // line 21
        if (isset($context["parameters"])) { $_parameters_ = $context["parameters"]; } else { $_parameters_ = null; }
        echo twig_escape_filter($this->env, $_parameters_, "html", null, true);
        echo "</textarea>

    ";
        // line 23
        if (isset($context["welcome_url"])) { $_welcome_url_ = $context["welcome_url"]; } else { $_welcome_url_ = null; }
        if ($_welcome_url_) {
            // line 24
            echo "        <ul>
            <li><a href=\"";
            // line 25
            if (isset($context["welcome_url"])) { $_welcome_url_ = $context["welcome_url"]; } else { $_welcome_url_ = null; }
            echo twig_escape_filter($this->env, $_welcome_url_, "html", null, true);
            echo "\">Go to the Welcome page</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
