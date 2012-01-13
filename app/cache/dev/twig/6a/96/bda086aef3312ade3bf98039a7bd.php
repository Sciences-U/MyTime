<?php

/* BackconDashboardBundle::layout.html.twig */
class __TwigTemplate_6a96bda086aef3312ade3bf98039a7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "glob_nom_congres"), "html", null, true);
        echo " - </title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Les scripts -->
    <script src=\"http://code.jquery.com/jquery-1.7.min.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/fonction_core.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
    var loaderManager = null;
    \$(document).ready(function(){
    \tloaderManager = new myLoader.LoaderAlert({src:'";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/loader.gif"), "html", null, true);
        echo "'});
    });
    </script>
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-alerts.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-twipsy.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-buttons.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">
  </head>

  <body>

    ";
        // line 45
        $this->env->loadTemplate("BackconDashboardBundle::header.html.twig")->display($context);
        // line 46
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"sidebar\">
\t\t  ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 50
            echo "\t\t  <div class=\"alert-message block-message ";
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "\">
\t\t\t<a class=\"close\" href=\"#\">×</a>
\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "
\t\t  </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "\t    </div>
\t    <div class=\"container\">
\t      <div class=\"content\">
\t        <div class=\"page-header\">
\t          ";
        // line 59
        $this->displayBlock('page_header', $context, $blocks);
        // line 60
        echo "\t        </div>
\t        <div class=\"row\">
\t          ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "\t        </div>
\t      </div>
\t
\t      <footer>
\t        <p>&copy; Company 2011</p>
\t      </footer>
\t
\t    </div> <!-- /container -->
\t</div>
  </body>
</html>
";
    }

    // line 59
    public function block_page_header($context, array $blocks = array())
    {
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "\t    \t  ";
    }

    public function getTemplateName()
    {
        return "BackconDashboardBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
