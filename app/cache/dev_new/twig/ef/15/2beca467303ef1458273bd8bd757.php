<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_ef152beca467303ef1458273bd8bd757 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if ($_link_) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a style=\"text-decoration: none; margin: 0; padding: 0;\" href=\"";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $_token_, "panel" => $_name_)), "html", null, true);
            echo "\">";
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            echo twig_escape_filter($this->env, $_icon_, "html", null, true);
            echo "</a>
    ";
            $context["icon"] = new Twig_Markup(ob_get_clean());
        }
        // line 6
        echo "<span style=\"white-space:nowrap; color:#2f2f2f; display:inline-block; min-height:24px; border-right:1px solid #cdcdcd; padding:5px 7px 5px 4px; \">
     ";
        // line 7
        if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($_icon_, "")) : ("")), "html", null, true);
        echo "
     ";
        // line 8
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($_text_, "")) : ("")), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
