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
        if (isset($context["glob_nom_congres"])) { $_glob_nom_congres_ = $context["glob_nom_congres"]; } else { $_glob_nom_congres_ = null; }
        echo twig_escape_filter($this->env, $_glob_nom_congres_, "html", null, true);
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
    
    <style type=\"text/css\">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>
    
    <!-- Les scripts -->
    <script src=\"http://code.jquery.com/jquery-1.7.min.js\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/fonction_core.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">
  </head>

  <body>

    ";
        // line 87
        $this->env->loadTemplate("BackconDashboardBundle::header.html.twig")->display($context);
        // line 88
        echo "
    <div class=\"container\">

      <div class=\"content\">
        <div class=\"page-header\">
          ";
        // line 93
        $this->displayBlock('page_header', $context, $blocks);
        // line 94
        echo "        </div>
        <div class=\"row\">
          ";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 98
        echo "        </div>
      </div>

      <footer>
        <p>&copy; Company 2011</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
";
    }

    // line 93
    public function block_page_header($context, array $blocks = array())
    {
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        // line 97
        echo "    \t  ";
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
