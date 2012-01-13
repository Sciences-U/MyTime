<?php

/* BackconConnexionBundle::layout.html.twig */
class __TwigTemplate_d3375671bbea979d03c42a1f7dafbd83 extends Twig_Template
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
        if (isset($context["glob_nom_congres"])) { $_glob_nom_congres_ = $context["glob_nom_congres"]; } else { $_glob_nom_congres_ = null; }
        echo twig_escape_filter($this->env, $_glob_nom_congres_, "html", null, true);
        echo "</title>
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
        height: 100%;
      }
      .modal {
        width: 460px;
      \tmargin: -140px 0 0 -230px;
      }
      .modal-body {
        padding: 15px 15px 0 15px;
      }
      form {
      \tmargin: 0;
      }
    </style>
  </head>

  <body>
  
  <div class=\"modal\">
  \t<div class=\"modal-header\">
        <h3>";
        // line 39
        if (isset($context["glob_nom_congres"])) { $_glob_nom_congres_ = $context["glob_nom_congres"]; } else { $_glob_nom_congres_ = null; }
        echo twig_escape_filter($this->env, $_glob_nom_congres_, "html", null, true);
        echo "</h3>
    </div>
    ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "    
  </div>
  
  </body>
</html>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BackconConnexionBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
