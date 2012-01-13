<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_33b477ed9aec9e9e30f2b91e8206b4db extends Twig_Template
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
        return "BackconUtilisateurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
<div class=\"modal-body\">
";
        // line 6
        if ($this->getContext($context, "error")) {
            // line 7
            echo "\t<div class=\"alert-message error\">
      <p><strong>Erreur :</strong> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</p>
    </div>
";
        }
        // line 11
        echo "\t<div class=\"clearfix\">
\t    <label for=\"username\">Identifiant</label>
\t    <div class=\"input\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" /></div>
\t</div>
\t<div class=\"clearfix\">
\t    <label for=\"password\">Mot de passe</label>
\t    <div class=\"input\"><input type=\"password\" id=\"password\" name=\"_password\" /></div>
\t</div>
\t<div class=\"clearfix\">
\t\t<div class=\"input\"><ul class=\"inputs-list\"><li><label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /><span>Se souvenir de moi</span></label></li></ul></div>
\t</div>
</div>
<div class=\"modal-footer\">
  \t<input class=\"btn primary\" type=\"submit\" name=\"_submit\" value=\"Se connecter\" />
  \t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_request"), "html", null, true);
        echo "\" class=\"secondary\">Mot de passe oubli&eacute; ?</a>
</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
