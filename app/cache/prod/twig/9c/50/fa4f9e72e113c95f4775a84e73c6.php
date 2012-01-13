<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_9c50fa4f9e72e113c95f4775a84e73c6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email"), "html", null, true);
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
<div class=\"modal-body\">
\t<div class=\"clearfix\">Saisissez votre nom d'utilisateur pour la r&eacute;initialisation de votre mot de passe : </div>\t 
    ";
        // line 4
        if (array_key_exists("invalid_username", $context)) {
            // line 5
            echo "    \t<div class=\"alert-message error\">
\t      <p><strong>Erreur :</strong> Nom d'utilisateur invalide</p>
\t    </div>
    ";
        }
        // line 9
        echo "    <div class=\"clearfix\">
        <label for=\"username\">Nom d'utilisateur</label>
        <div class=\"input\"><input type=\"text\" id=\"username\" name=\"username\" /></div>
    </div>
</div>
<div class=\"modal-footer\">
    <input class=\"btn primary\" type=\"submit\" value=\"R&eacute;initialiser le mot de passe\" />
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
        echo "\">Se connecter</a>
</div>
</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
