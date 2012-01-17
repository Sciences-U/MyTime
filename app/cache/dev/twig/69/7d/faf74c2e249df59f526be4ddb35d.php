<?php

/* BackconParametresGeneralBundle:Utilisateurs:index.html.twig */
class __TwigTemplate_697dfaf74c2e249df59f526be4ddb35d extends Twig_Template
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
\t\$(function() {\t\t\t\t
\t\t\$(\"#ajoutUtilisateur\").click(function(){
\t\t\t\$(\"#btnCreerUtilisateur\").button('reset');
\t\t\t\$(\"#formNouveauUtilisateur\").modal('show');
\t\t\teffacerErreurs('formNouveauUtilisateur');
\t\t\treturn false;
\t\t});
\t\t
\t   \t\$(\"#nouveauUtilisateur\").submit(function(){
\t   \t\tvar active = 0;
\t   \t\tif(\$(\"#form_active\").is(':checked'))
\t   \t\t\tactive = 1;
\t   \t\t
\t   \t\tif(!loaderManager.lock('nouveau_utilisteur')){\t
\t\t       \t\$.ajax({
\t\t\t\t\turl: \$(\"#nouveauUtilisateur\").attr(\"action\"),
\t\t\t\t\tglobal: false,
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\tdata: {
\t\t\t           \tusername:\$(\"#form_username\").val(),
\t\t\t           \tpassword:\$(\"#form_password\").val(),
\t\t\t           \temail:\$(\"#form_email\").val(),
\t\t\t           \tactive:active
\t\t\t       \t},
\t\t\t\t\tdataType: \"json\",
\t\t\t\t\tasync:true,
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\t\$(\"#btnCreerUtilisateur\").button('reset');
\t\t\t\t\t\t\$(\"#alertOk\").hide();
\t\t\t\t\t\t\$(\"#alertErr\").hide();
\t\t\t\t\t\teffacerErreurs('formNouveauUtilisateur');
\t\t\t\t\t\t
\t\t\t\t\t\tif(data.response==200 ){  
\t\t\t\t\t\t\t\$('#msgOk').html('Un nouvel utilisateur a été ajouté');         
\t\t\t            \t\$(\"#alertOk\").fadeIn();
\t\t\t                \$(\"#formNouveauUtilisateur\").modal('hide');
\t\t\t                \$(\"#lesUtilisateur\").html('<div style=\"margin:50px; text-align:center;\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/loader.gif"), "html", null, true);
        echo "\" alt=\"Chargement ...\" /></div>');
\t\t\t                \$.post(data.url, {}, function(contenuHtml){
\t\t\t                \t\$(\"#lesUtilisateur\").css({'display':'none'});
\t\t\t                \t\$(\"#lesUtilisateur\").html(contenuHtml);
\t\t\t                \t\$(\"#lesUtilisateur\").slideDown();
\t\t\t                });
\t\t\t            } else if(data.response==400){
\t\t\t\t            \$.each(data.erreurs, function(){
\t\t\t\t               \t\$(\"#\"+this.id).addClass('error');
\t\t\t\t               \t\$(\"#\"+this.id).parents('.clearfix').addClass('error');
\t\t\t\t               \t\$(\"#\"+this.id).parents('.input').append('<div class=\"txtErreur\"><span class=\"help-inline\">'+this.msg+'</span></div>');
\t\t\t\t            });
\t\t\t          \t} else if(data.response==500){
\t\t\t          \t\t\$(\"#formNouveauUtilisateur\").modal('hide');
\t\t\t               \t\$('#msgErreur').html(data.erreur);
\t\t\t\t\t\t\t\$(\"#alertErr\").fadeIn();
\t\t\t          \t} else {
\t\t\t          \t\t\$(\"#formNouveauUtilisateur\").modal('hide');
\t\t\t          \t\t\$('#msgErreur').html(\"<strong>Oops !</strong> Une erreur s'est survenue au niveau du serveur\");
\t\t\t          \t\t\$(\"#alertErr\").fadeIn();
\t\t\t          \t}
\t\t\t\t\t},
\t\t\t\t\terror: function(){
\t\t\t\t\t\t\$(\"#formNouveauUtilisateur\").modal('hide');
\t\t\t\t\t\t\$('#msgErreur').html(\"<strong>Oops !</strong> Une erreur s'est survenue au niveau du serveur\");
\t\t\t          \t\$(\"#alertErr\").fadeIn();
\t\t\t\t\t},
\t\t\t\t\tcomplete: function(){
\t\t\t\t\t\tloaderManager.delock('nouveau_utilisteur');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t       \t
\t      \treturn false;
\t   \t});
\t});
\t
\tvar keylist = \"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPKRSTUVWXYZ123456789\";
\tvar temp = '';
\t
\tfunction generatepass(plength){
\t\ttemp = '';
\t\tfor (i=0;i<plength;i++)
\t\t\ttemp += keylist.charAt(Math.floor(Math.random()*keylist.length));
\t\treturn temp;
\t}
\t
\tfunction etat(element,etat){
\t\tif(!loaderManager.lock('etat_'+element.parents('tr').attr('id')+'_'+etat)){
\t\t\tloaderManager.show();
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_general_utilisateurs_etat"), "html", null, true);
        echo "',
\t\t\t\tglobal: false,
\t\t\t\ttype: \"POST\",
\t\t\t\tdata: {
\t\t           \tusername:element.parents('tr').children('td:first').text(),
\t\t           \tetat:etat
\t\t       \t},
\t\t\t\tdataType: \"json\",
\t\t\t\tasync:true,
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tif(data.response==200){ 
\t\t\t\t\t\tloaderManager.hide();
\t\t\t\t\t\tif(data.etat){
\t\t\t\t\t\t\tif(!data.expire)
\t\t\t\t\t\t\t\telement.parents('tr').removeClass('red');
\t\t\t\t\t\t\telement.children('img').attr({'src':'";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/active.png"), "html", null, true);
        echo "'});
\t\t\t\t\t\t\telement.attr({'href':'#desactive'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.parents('tr').addClass('red');
\t\t\t\t\t\t\telement.children('img').attr({'src':'";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backcondashboard/images/desactive.png"), "html", null, true);
        echo "'});
\t\t\t\t\t\t\telement.attr({'href':'#active'});
\t\t\t\t\t\t}
\t\t            } else if(data.response==500){
\t\t            \tloaderManager.hide(data.erreur);
\t\t          \t} else {
\t\t          \t\tloaderManager.hide(\"<strong>Oops !</strong> Une erreur s'est survenue au niveau du serveur\");
\t\t          \t}
\t\t\t\t},
\t\t\t\terror: function(){
\t\t\t\t\tloaderManager.hide(\"<strong>Oops !</strong> Une erreur s'est survenue au niveau du serveur\");
\t\t\t\t},
\t\t\t\tcomplete: function(){
\t\t\t\t\tloaderManager.delock('etat_'+element.parents('tr').attr('id')+'_'+etat);
\t\t\t\t}
\t\t\t});
\t\t}
\t}
\t
\tfunction supprimer(id){
\t\tif(!loaderManager.lock('supprimer_'+id)){
\t\t\tloaderManager.show();
\t\t\t\$('#'+id+'_loader').css({'display':'inline-block'});
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_general_utilisateurs_supprimer"), "html", null, true);
        echo "',
\t\t\t\tglobal: false,
\t\t\t\ttype: \"POST\",
\t\t\t\tdata: {
\t\t           \tusername:\$(\"#\"+id+\" td:first\").text()
\t\t       \t},
\t\t\t\tdataType: \"json\",
\t\t\t\tasync:true,
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tloaderManager.hide();
\t\t\t\t\tif(data.response==200 ){ 
\t\t\t\t\t\t\$('#msgOk').html('L\\'utilisateur <strong>'+\$(\"#\"+id+\" td:first\").text()+'</strong> a été supprimé');           
\t\t            \t\$(\"#alertOk\").fadeIn();
\t\t            \t\$('#'+id).next().remove();
\t\t            \t\$('#'+id).remove();
\t\t            \t\$(\"table#tableUtilisateurs\").trigger(\"update\");
\t\t            } else if(data.response==500){
\t\t               \t\$('#msgErreur').html(data.erreur);
\t\t\t\t\t\t\$(\"#alertErr\").fadeIn();
\t\t          \t} else {
\t\t          \t\t\$('#msgErreur').html(\"<strong>Oops !</strong> Une erreur s'est survenue au niveau du serveur\");
\t\t          \t\t\$(\"#alertErr\").fadeIn();
\t\t          \t}
\t\t\t\t},
\t\t\t\terror: function(){
\t\t\t\t\tloaderManager.hide();
\t\t\t\t\t\$('#msgErreur').html(\"<strong>Oops !</strong> Une erreur s'est survenue au niveau du serveur\");
\t\t          \t\$(\"#alertErr\").fadeIn();
\t\t\t\t},
\t\t\t\tcomplete: function(){
\t\t\t\t\tloaderManager.delock('supprimer_'+id);
\t\t\t\t}
\t\t\t});
\t\t}
\t}
\t
\tfunction annuler(id){
\t\t\$('#'+id).next().remove();
\t\t\$('#'+id).removeClass('yellow');
\t}
\t</script>
\t<fieldset>
\t\t<legend>Liste des utilisateurs</legend>
\t\t
\t\t<div id=\"alertOk\" class=\"alert-message success fade in\" style=\"display: none;\">
\t        <a href=\"#\" class=\"close\">×</a>
\t        <p id=\"msgOk\"></p>
\t    </div>
\t    
\t    <div id=\"alertErr\" class=\"alert-message error fade in\" style=\"display: none;\">
\t        <a href=\"#\" class=\"close\">×</a>
\t        <p id=\"msgErreur\"></p>
\t    </div>
\t    
\t\t<p>
\t\t\t<button id=\"ajoutUtilisateur\" class=\"btn primary rigth\" data-controls-modal=\"formNouveauUtilisateur\" data-keyboard=\"true\" data-backdrop=\"true\">Ajouter un utilisateur</button>
\t\t\t<div style=\"clear: both\"></div>
\t\t</p>
\t\t
\t\t<div class=\"modal hide fade\" id=\"formNouveauUtilisateur\" style=\"display: none;\">
\t\t  <form id=\"nouveauUtilisateur\" action=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_general_utilisateurs_nouveau"), "html", null, true);
        echo "\" method=\"POST\" style=\"margin:0;\" onSubmit=\"return false;\">
\t        <div class=\"modal-header\">
\t          <a class=\"close\" href=\"#\">×</a>
\t          <h3>Ajouter un utilisateur</h3>
\t        </div>
\t        <div class=\"modal-body\">
\t          <p>
\t\t\t\t";
        // line 216
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "username"), array("label" => "Nom d'utilisateur"));
        echo "
\t\t\t\t<div class=\"clearfix\">
\t              <label for=\"form_password\">Mot de passe <span title=\"Ce champ est requis\" class=\"required\">*</span></label>
\t              <div class=\"input\">
\t                ";
        // line 220
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "
\t                <button class=\"btn\" onclick=\"\$('#form_password').val(generatepass(8)); return false;\">Générer</button>
\t              </div>
\t            </div>
\t\t\t\t";
        // line 224
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"), array("label" => "Mot de passe", "class" => "span3"));
        echo "
\t\t\t\t";
        // line 225
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"), array("label" => "Email"));
        echo "
\t\t\t\t<div class=\"clearfix\">
\t\t            <div class=\"input\">
\t\t              <ul class=\"inputs-list\">
\t\t\t\t        <li>
\t\t\t\t          <label>
\t\t\t\t            <input type=\"checkbox\" value=\"1\" id=\"form_active\" name=\"form_active\" checked=\"checked\">
\t\t\t\t            <span>Activer le compte</span>
\t\t\t\t          </label>
\t\t\t\t        </li>
\t\t\t\t      </ul>
\t\t\t\t    </div>
\t\t\t\t</div>
\t          </p>
\t        </div>
\t        <div class=\"modal-footer\">
\t          <button id=\"btnCreerUtilisateur\" class=\"btn primary\" onclick=\"\$(this).button('loading'); \$('#nouveauUtilisateur').submit(); return false;\" data-loading-text=\"Sauvegarde ...\">Créer l'utilisateur</button>
\t        </div>
\t      </form>
\t    </div>
\t    
\t    <div class=\"modal hide fade\" id=\"formModifierUtilisateur\" style=\"display: none;\"></div>
\t\t
\t\t<div id=\"lesUtilisateur\">
\t\t";
        // line 249
        echo $this->env->getExtension('actions')->renderAction("BackconParametresGeneralBundle:Utilisateurs:lister", array("max" => 15), array());
        // line 250
        echo "\t\t</div>
\t </fieldset>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackconParametresGeneralBundle:Utilisateurs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
