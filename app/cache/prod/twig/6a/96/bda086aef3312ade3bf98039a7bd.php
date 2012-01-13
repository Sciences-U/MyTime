<?php

/* BackconDashboardBundle::layout.html.twig */
class __TwigTemplate_6a96bda086aef3312ade3bf98039a7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">
  </head>

  <body>

    <div class=\"topbar\">
      <div class=\"fill\">
        <div class=\"container\">
          <a class=\"brand\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BackconDashboardBundle_homepage"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "glob_nom_congres"), "html", null, true);
        echo "</a>
          <ul class=\"nav\">
            <li><a href=\"#\">R&eacute;servations</a></li>
            <li><a href=\"#about\">Prestations</a></li>
            <li><a href=\"#contact\">H&ocirc;tellerie</a></li>
            <li><a href=\"#contact\">Inscriptions</a></li>
          </ul>
          <form action=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\" class=\"pull-right\">
\t\t\t";
        // line 89
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 90
            echo "\t\t\t    <a class=\"input-small\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">Connect&eacute; : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</a>&nbsp;&nbsp;&nbsp;
\t\t\t";
        } else {
            // line 92
            echo "\t\t\t    <a class=\"input-small\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Vous devez vous connecter !</a>&nbsp;&nbsp;&nbsp;
\t\t\t";
        }
        // line 94
        echo "\t\t\t
\t\t\t";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 96
            echo "\t\t\t<div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "\">
\t\t\t    ";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 100
        echo "            <button class=\"btn danger\" type=\"submit\">Se d&eacute;connecter</button>
          </form>
        </div>
      </div>
    </div>

    <div class=\"container\">

      <div class=\"content\">
        <div class=\"page-header\">
          <h1>Page name <small>Supporting text or tagline</small></h1>
        </div>
        <div class=\"row\">
          ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 115
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

    // line 113
    public function block_content($context, array $blocks = array())
    {
        // line 114
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
