<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_32a25693aad6ce7740d9b2bbbacd180f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if (isset($context["tokens"])) { $_tokens_ = $context["tokens"]; } else { $_tokens_ = null; }
        if ($_tokens_) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 17
            if (isset($context["tokens"])) { $_tokens_ = $context["tokens"]; } else { $_tokens_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tokens_);
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 18
                echo "                    <tr>
                        <td><a href=\"";
                // line 19
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_elements_, "token"))), "html", null, true);
                echo "\">";
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_elements_, "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 20
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_elements_, "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 21
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_elements_, "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($_elements_, "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 28
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
