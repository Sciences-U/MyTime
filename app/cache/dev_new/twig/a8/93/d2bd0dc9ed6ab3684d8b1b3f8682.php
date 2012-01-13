<?php

/* BackconParametresReservationBundle:Default:index.html.twig */
class __TwigTemplate_a893d2bd0dc9ed6ab3684d8b1b3f8682 extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Paramètres <small>> Réservation</small></h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"span4\">
\t<h3>Actions</h3>
\t<dl>
\t\t<hr>
\t\t<dd><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Editer</a></dd>
\t\t<hr>
\t\t<dd>Liste des utilisateurs</dd>
\t\t<dd>Liste des groupes</dd>
\t\t<dd>Liste des utilisateurs</dd>
\t</dl>
</div>
<div class=\"span10\">
\t";
        // line 20
        $this->env->loadTemplate("BackconDashboardBundle:Parametres:menu.html.twig")->display(array_merge($context, array("reservation" => true)));
        // line 21
        echo "\t
\t    <div class=\"actions\">
          <input class=\"btn primary\" type=\"submit\" value=\"Enregistrer les modifications\" />
        </div>
    </fieldset>
\t</form>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackconParametresReservationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
