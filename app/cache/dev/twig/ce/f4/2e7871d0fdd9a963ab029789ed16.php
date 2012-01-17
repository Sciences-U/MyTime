<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cef42e7871d0fdd9a963ab029789ed16 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"span4\">
\t<h3>Actions</h3>
\t<dl>
\t\t<hr>
\t\t<dd><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Editer</a></dd>
\t</dl>
</div>
<div class=\"span10\">
<form action=\"#\" onsubmit=\"return false;\">
\t<fieldset>
    \t<legend>Compte utilisateur</legend>
    \t<div class=\"clearfix\">
            <label>Nom d'utilisateur</label>
            <div class=\"input\">
              <span class=\"uneditable-input\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</span>
            </div>
        </div>
    \t<div class=\"clearfix\">
            <label>Email</label>
            <div class=\"input\">
              <span class=\"uneditable-input\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"clearfix\">
            <label>Etat</label>
            <div class=\"input\">
            ";
        // line 27
        if ($this->getAttribute($this->getContext($context, "user"), "enabled")) {
            // line 28
            echo "              <span class=\"uneditable-input\">Actif</span>
            ";
        } else {
            // line 30
            echo "              <span class=\"uneditable-input\">Inactif</span>
            ";
        }
        // line 32
        echo "            </div>
        </div>
        <div class=\"clearfix\">
            <label>Expiration</label>
            <div class=\"input\">
            ";
        // line 37
        if ($this->getAttribute($this->getContext($context, "user"), "expired")) {
            // line 38
            echo "              <span class=\"uneditable-input\">Expir&eacute;</span>
            ";
        } elseif ($this->getAttribute($this->getContext($context, "user", true), "expiresAt", array(), "any", true, true)) {
            // line 40
            echo "              <span class=\"uneditable-input\">expired</span>
            ";
        } else {
            // line 42
            echo "              <span class=\"uneditable-input\">Jamais</span>
            ";
        }
        // line 44
        echo "            </div>
        </div>
        <div class=\"clearfix\">
        \t<ul class=\"unstyled\">
        \t";
        // line 48
        if ($this->getAttribute($this->getContext($context, "user", true), "lastLogin", array(), "any", true, true)) {
            // line 49
            echo "        \t\t<li><i>Derni&egrave;re connexion : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "user"), "lastLogin"), "d/m/Y H:i:s"), "html", null, true);
            echo "</i></li>
        \t";
        } else {
            // line 51
            echo "        \t\t<li><i>Derni&egrave;re connexion : auncune</i></li>
        \t";
        }
        // line 53
        echo "        \t</ul>
        </div>
   \t</fieldset>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
