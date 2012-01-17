<?php

/* BackconParametresGeneralBundle:Utilisateurs:lister.html.twig */
class __TwigTemplate_134c0c943cf30b87633e43c377992d70 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t  <table id=\"tableUtilisateurs\" class=\"bordered-table zebra-striped\">
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
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "\t        <tr";
            if (($this->getAttribute($this->getContext($context, "user"), "locked") || (!$this->getAttribute($this->getContext($context, "user"), "enabled")))) {
                echo " class=\"red\"";
            }
            echo " id=\"user";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
            echo "\">
\t            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
            echo "</td>
\t            <td>
\t            \t<a href=\"#supprimer\" rel='twipsy' title='Cliquez pour supprimer'>
\t            \t\t<img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/supprimer.png"), "html", null, true);
            echo "\" alt=\"Verouillé\" width=\"16\" height=\"16\" />
\t            \t</a>
\t            \t";
            // line 19
            if ($this->getAttribute($this->getContext($context, "user"), "locked")) {
                // line 20
                echo "\t            \t\t<span style=\"display:none\">b</span>
\t            \t\t<a href=\"#deverrouiller\" rel='twipsy' title='Cliquez pour déverrouiller'>
\t            \t\t\t<img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/verrou.png"), "html", null, true);
                echo "\" alt=\"Verouillé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            } else {
                // line 25
                echo "\t            \t\t<span style=\"display:none\">a</span>
\t            \t\t<a href=\"#verrouiller\" rel='twipsy' title='Cliquez pour verrouiller'>
\t            \t\t\t<img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/verrou_ouvert.png"), "html", null, true);
                echo "\" alt=\"Déverouillé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            }
            // line 30
            echo "\t            \t";
            if ($this->getAttribute($this->getContext($context, "user"), "enabled")) {
                // line 31
                echo "\t            \t\t<span style=\"display:none\">a</span>
\t            \t\t<a href=\"#desactive\" rel='twipsy' title='Cliquez pour désactiver'>
\t            \t\t\t<img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/active.png"), "html", null, true);
                echo "\" alt=\"Activé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            } else {
                // line 36
                echo "\t            \t\t<span style=\"display:none\">b</span>
\t            \t\t<a href=\"#active\" rel='twipsy' title='Cliquez pour activer'>
\t            \t\t\t<img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/desactive.png"), "html", null, true);
                echo "\" alt=\"Desactivé\" width=\"16\" height=\"16\" />
\t            \t\t</a>
\t            \t";
            }
            // line 41
            echo "\t           \t</td>
\t            <td>
\t            \t";
            // line 43
            if ($this->getAttribute($this->getContext($context, "user"), "expired")) {
                // line 44
                echo "\t            \t<a href=\"#\" rel='twipsy' title='Compte expiré le ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "timeExpired"), "html", null, true);
                echo "'>
\t            \t\t<img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/timer_a_expirer.png"), "html", null, true);
                echo "\" alt=\"Expiré\" width=\"16\" height=\"16\" />
\t            \t</a>
\t            \t";
            } elseif ($this->getAttribute($this->getContext($context, "user"), "accountGoingExpired")) {
                // line 48
                echo "\t            \t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/timer_va_expirer.png"), "html", null, true);
                echo "\" alt=\"Va expiré\" width=\"16\" height=\"16\" />
\t            \t";
            }
            // line 50
            echo "\t            </td>
\t        </tr>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "\t\t\t</tbody>
\t      </table>
\t      <script>
\t      \t\$(\"table#tableUtilisateurs\").tablesorter({ sortList: [[0,0]] });
\t      \t\$(\"a[rel=twipsy]\").twipsy({ live: true }).click(function(){ 
\t\t\t\tvar ligne = \$(this).parents('tr');
\t\t\t\tvar id = ligne.attr('id');
\t      \t\tif(\$(this).attr('href') == '#supprimer'){
\t      \t\t\t\$(\"table#tableUtilisateurs\").bind(\"sortStart\",function() { 
\t      \t\t\t\tvar ligneClass = ligne.attr('class');
\t\t\t\t        \$(\".suppressionAlertMessage\").each(function(){
\t\t\t\t        \t\$(this).prev().removeClass('yellow');
\t\t\t\t        \t\$(this).remove();
\t\t\t\t        }); 
\t\t\t\t        \$(\"table#tableUtilisateurs\").trigger(\"update\");
\t\t\t\t        \$('#foo').unbind(\"sortStart\");
\t\t\t\t    });
\t\t\t\t\tligne.addClass('yellow');
\t\t\t\t\tligne.after('<tr class=\"suppressionAlertMessage\"><td colspan=\"4\"><div data-alert=\"alert\" class=\"alert-message block-message warning fade in\"><p><strong>Attention :</strong> Etes vous certain de vouloir supprimer définitivement ce compte ?</p><div class=\"alert-actions\"><a href=\"#\" onclick=\"supprimer(\\''+id+'\\'); return false;\" class=\"btn small\">Supprimer</a> <a href=\"#\" onclick=\"annuler(\\''+id+'\\'); return false;\" class=\"btn small\">Annuler</a> <span id=\"'+id+'_loader\" style=\"display:none;\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/loader.gif"), "html", null, true);
        echo "\" alt=\"Chargement ...\" /> Suppression en cours ...</span></div></div></td></tr>');
\t\t\t\t\treturn false;
\t\t\t\t} else if(\$(this).attr('href') == '#desactive'){
\t\t\t\t\tetat(\$(this),0);
\t\t\t\t} else if(\$(this).attr('href') == '#active'){
\t\t\t\t\tetat(\$(this),1);
\t\t\t\t} else
\t\t\t\t\treturn false;
\t\t\t});
\t      </script>";
    }

    public function getTemplateName()
    {
        return "BackconParametresGeneralBundle:Utilisateurs:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
