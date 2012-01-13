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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "label"), "nom"), "html", null, true);
        echo "

    ";
        // line 7
        if ($this->getContext($context, "required")) {
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
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "    <br />
    <span class=\"help-inline\">
        ";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
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
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo " error";
        }
        echo "\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), array("nom" => $this->getContext($context, "label")));
        echo "
        <div class=\"input \">
        ";
        // line 32
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 33
            echo "\t        ";
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"), array("attr" => array("class" => "error span2", "data-datepicker" => "datepicker")));
            echo "
\t    ";
        } else {
            // line 35
            echo "\t        ";
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"), array("attr" => array("class" => "span2", "data-datepicker" => "datepicker")));
            echo "
\t    ";
        }
        // line 37
        echo "\t        ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
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
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo " error";
        }
        echo "\">
        ";
        // line 46
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), array("nom" => $this->getContext($context, "label")));
        echo "
        <div class=\"input\">
        ";
        // line 48
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 49
            echo "\t        ";
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"), array("attr" => array("class" => "error")));
            echo "
\t    ";
        } else {
            // line 51
            echo "\t        ";
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "
\t    ";
        }
        // line 53
        echo "\t        ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        </div>
        ";
        // line 55
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
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
