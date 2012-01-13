<?php

/* BackconDashboardBundle:Form:fields.html.twig */
class __TwigTemplate_7ec6bb0474adecc633a7df108f9c832b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
            'field_errors' => array($this, 'block_field_errors'),
            'date_row' => array($this, 'block_date_row'),
            'field_row' => array($this, 'block_field_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_label($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        ob_start();
        // line 5
        echo "\t    <label for=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_label_, "nom"), "html", null, true);
        echo "

    ";
        // line 7
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        if ($_required_) {
            // line 8
            echo "        <span class=\"required\" title=\"Ce champ est requis\">*</span>
    ";
        }
        // line 10
        echo "    \t</label>
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 14
    public function block_field_errors($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 17
            echo "        ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "    <br />
    <span class=\"help-inline\">
        ";
                // line 20
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messageParameters"), "validators"), "html", null, true);
                echo "
    </span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_date_row($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "\t<div class=\"clearfix";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo " error";
        }
        echo "\">
        ";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo $this->env->getExtension('form')->renderLabel($_form_, array("nom" => $_label_));
        echo "
        <div class=\"input \">
        ";
        // line 32
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 33
            echo "\t        ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderWidget($_form_, array("attr" => array("class" => "error span2", "data-datepicker" => "datepicker")));
            echo "
\t    ";
        } else {
            // line 35
            echo "\t        ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderWidget($_form_, array("attr" => array("class" => "span2", "data-datepicker" => "datepicker")));
            echo "
\t    ";
        }
        // line 37
        echo "\t        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($_form_);
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_field_row($context, array $blocks = array())
    {
        // line 44
        ob_start();
        // line 45
        echo "\t<div class=\"clearfix";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo " error";
        }
        echo "\">
        ";
        // line 46
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo $this->env->getExtension('form')->renderLabel($_form_, array("nom" => $_label_));
        echo "
        <div class=\"input\">
        ";
        // line 48
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 49
            echo "\t        ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderWidget($_form_, array("attr" => array("class" => "error")));
            echo "
\t    ";
        } else {
            // line 51
            echo "\t        ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderWidget($_form_);
            echo "
\t    ";
        }
        // line 53
        echo "\t        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($_form_);
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "BackconDashboardBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
