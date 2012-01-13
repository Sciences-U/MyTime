<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_e1369ad608dd277ab55a8570530e712d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->setTheme($_form_, array("BackconDashboardBundle:Form:fields.html.twig", ));
        // line 2
        echo "
<div class=\"span4\">
\t<h3>Actions</h3>
\t<dl>
\t\t<hr>
\t\t<dd><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Editer</a></dd>
\t\t<hr>
\t\t<dd>Liste des utilisateurs</dd>
\t\t<dd>Liste des groupes</dd>
\t\t<dd>Liste des utilisateurs</dd>
\t</dl>
</div>
<div class=\"span10\">
<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    
\t<fieldset>
    \t<legend>Compte utilisateur</legend>
    \t";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getAttribute($_form_, "user"), "username"), array("label" => "Nom d'utilisateur"));
        echo "
    \t";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getAttribute($_form_, "user"), "email"), array("label" => "Email"));
        echo "     
        <div class=\"actions\">
          <input class=\"btn primary\" type=\"submit\" value=\"Enregistrer\" />&nbsp;<button class=\"btn\" type=\"reset\">Cancel</button>
        </div>
   \t</fieldset>
</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
