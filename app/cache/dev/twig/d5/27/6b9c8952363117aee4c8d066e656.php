<?php

/* BackconParametresGeneralBundle:Utilisateurs:liste.html.twig */
class __TwigTemplate_d5276b9c8952363117aee4c8d066e656 extends Twig_Template
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
        return "BackconDashboardBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("BackconDashboardBundle:Form:fields.html.twig", ));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_header($context, array $blocks = array())
    {
        // line 5
        echo "\t<h1>Paramètres <small>> Général (utilisateurs)</small></h1>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"span4\">
\t<h3>Actions</h3>
\t<dl>
\t\t<hr>
\t\t<dd><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_general"), "html", null, true);
        echo "\">Général</a></dd>
\t</dl>
</div>
<div class=\"span10\">
\t";
        // line 17
        $this->env->loadTemplate("BackconDashboardBundle:Parametres:menu.html.twig")->display(array_merge($context, array("general" => true)));
        // line 18
        echo "\t<script >
\t\$(function() {
\t\t\$(\"table#tableUtilisateurs\").tablesorter({ sortList: [[0,0]] });
\t\t
\t\t\$(\"a[rel=twipsy]\").twipsy({ live: true });
\t\t
\t\t\$(\"#ajoutUtilisateur\").click(function(){
\t\tconsole.log(\"yo\");
\t\t\t\$(\"#formUtilisateur\").modal('show');
\t\t\treturn false;
\t\t});
\t\t
\t   \$(\"#myForm\").submit(function(){
\t      //get the url for the form
\t      var url=\$(\"#myForm\").attr(\"action\");
\t   
\t      //start send the post request
\t       \$.post(url,{
\t           formName:\$(\"#nameid\").val(),
\t           other:\"attributes\"
\t       },function(data){
\t           //the response is in the data variable
\t   
\t            if(data.response==200 ){           
\t                \$('#output').html(data.greeting);
\t                \$('#output').css(\"color\",\"red\");
\t            }
\t           else if(data.response==400){//bad request
\t               \$('#output').html(data.greeting);
\t               \$('#output').css(\"color\",\"red\");
\t          }
\t       
\t       },\"json\");//make sure the the response is in json format
\t
\t      //we dont what the browser to submit the form
\t      return false;
\t   });
\t});
\t</script>
\t<fieldset>
\t\t<legend>Liste des utilisateurs</legend>
\t\t<p>
\t\t\t<button id=\"ajoutUtilisateur\" class=\"btn success rigth\" data-controls-modal=\"formUtilisateur\" data-backdrop=\"true\">Ajouter un utilisateur</button>
\t\t\t<div style=\"clear: both\"></div>
\t\t</p>
\t\t
\t\t<div class=\"modal hide fade\" id=\"formUtilisateur\" style=\"display: none;\">
\t        <div class=\"modal-header\">
\t          <a class=\"close\" href=\"#\">×</a>
\t          <h3>Ajouter un utilisateur</h3>
\t        </div>
\t        <div class=\"modal-body\">
\t          <p>
\t          \t<form id=\"myForm\" action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_general_utilisateurs_edite"), "html", null, true);
        echo "\" method=\"POST\" >
\t\t\t\t    ";
        // line 72
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "username"), array("label" => "Nom d'utilisateur"));
        echo "
\t\t\t\t</form>
\t          </p>
\t        </div>
\t        <div class=\"modal-footer\">
\t          <a class=\"btn primary\" href=\"#\">Primary</a>
\t          <a class=\"btn secondary\" href=\"#\">Secondary</a>
\t        </div>
\t    </div>
\t\t
\t\t<table id=\"tableUtilisateurs\" class=\"bordered-table zebra-striped\">
\t        <thead>
\t          <tr>
\t            <th class=\"header\">Identifiant</th>
\t            <th class=\"header\">Email</th>
\t            <th class=\"header\">Actions</th>
\t            <th class=\"header\">Etat</th>
\t          </tr>
\t        </thead>
\t        <tbody>
\t        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 93
            echo "\t        <tr";
            if ($this->getAttribute($this->getContext($context, "user"), "locked")) {
                echo " class=\"red\"";
            }
            echo ">
\t            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
            echo "</td>
\t            <td>
\t            \t";
            // line 97
            if ($this->getAttribute($this->getContext($context, "user"), "locked")) {
                // line 98
                echo "\t            \t\t<span style=\"display:none\">b</span>
\t            \t\t<a href=\"#\" rel='twipsy' title='Cliquez pour déverrouiller'>
\t            \t\t\t<img src=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/verrou.png"), "html", null, true);
                echo "\" alt=\"Verouillé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            } else {
                // line 103
                echo "\t            \t\t<span style=\"display:none\">a</span>
\t            \t\t<a href=\"#\" rel='twipsy' title='Cliquez pour verrouiller'>
\t            \t\t\t<img src=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/verrou_ouvert.png"), "html", null, true);
                echo "\" alt=\"Déverouillé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            }
            // line 108
            echo "\t            \t<a href=\"#\" rel='twipsy' title='Cliquez pour supprimer'>
\t            \t\t<img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/supprimer.png"), "html", null, true);
            echo "\" alt=\"Verouillé\" width=\"16\" height=\"16\" />
\t            \t</a>
\t           \t</td>
\t            <td>
\t            \t";
            // line 113
            if ($this->getAttribute($this->getContext($context, "user"), "enabled")) {
                // line 114
                echo "\t            \t\t<span style=\"display:none\">a</span>
\t            \t\t<a href=\"#\" rel='twipsy' title='Compte activé'>
\t            \t\t\t<img src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/active.png"), "html", null, true);
                echo "\" alt=\"Activé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            } else {
                // line 119
                echo "\t            \t\t<span style=\"display:none\">b</span>
\t            \t\t<a href=\"#\" rel='twipsy' title='Compte désactivé'>
\t            \t\t\t<img src=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/desactive.png"), "html", null, true);
                echo "\" alt=\"Desactivé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            }
            // line 124
            echo "\t            \t";
            if ($this->getAttribute($this->getContext($context, "user"), "expired")) {
                // line 125
                echo "\t            \t<a href=\"#\" rel='twipsy' title='Compte expiré le ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "timeExpired"), "html", null, true);
                echo "'>
\t            \t\t<img src=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/timer_a_expirer.png"), "html", null, true);
                echo "\" alt=\"Expiré\" width=\"16\" height=\"16\" />
\t            \t</a>
\t            \t";
            } elseif ($this->getAttribute($this->getContext($context, "user"), "accountGoingExpired")) {
                // line 129
                echo "\t            \t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/timer_va_expirer.png"), "html", null, true);
                echo "\" alt=\"Va expiré\" width=\"16\" height=\"16\" />
\t            \t";
            }
            // line 131
            echo "\t            </td>
\t        </tr>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 134
        echo "\t\t\t</tbody>
\t      </table>
\t </fieldset>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackconParametresGeneralBundle:Utilisateurs:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
