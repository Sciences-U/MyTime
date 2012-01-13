<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_f66085ca1b0b8a68adbfb8d7871e255b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>
<thead>
    <tr>
        <th scope=\"col\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
</thead>
<tbody>
    ";
        // line 9
        if (isset($context["bag"])) { $_bag_ = $context["bag"]; } else { $_bag_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($_bag_, "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "        <tr>
            <th>";
            // line 11
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, $_key_, "html", null, true);
            echo "</th>
            <td>";
            // line 12
            if (isset($context["bag"])) { $_bag_ = $context["bag"]; } else { $_bag_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getAttribute($_bag_, "get", array($_key_, ), "method")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
