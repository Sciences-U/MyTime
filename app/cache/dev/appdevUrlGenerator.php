<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'parametres_inscription' => true,
       'parametres_hotellerie' => true,
       'parametres_prestation' => true,
       'parametres_reservation' => true,
       'parametres_general' => true,
       'parametres_general_utilisateurs' => true,
       'parametres_general_utilisateurs_lister' => true,
       'parametres_general_utilisateurs_nouveau' => true,
       'parametres_general_utilisateurs_supprimer' => true,
       'parametres_general_utilisateurs_etat' => true,
       'parametres_congres' => true,
       'parametres_congres_avance' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'dashboard_homepage' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_group_list' => true,
       'fos_user_group_new' => true,
       'fos_user_group_show' => true,
       'fos_user_group_edit' => true,
       'fos_user_group_delete' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getparametres_inscriptionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\InscriptionBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/inscription/',  ),));
    }

    private function getparametres_hotellerieRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\HotellerieBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/hotellerie/',  ),));
    }

    private function getparametres_prestationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\PrestationBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/prestation/',  ),));
    }

    private function getparametres_reservationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\ReservationBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/reservation/',  ),));
    }

    private function getparametres_generalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\GeneralBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/general/',  ),));
    }

    private function getparametres_general_utilisateursRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\GeneralBundle\\Controller\\UtilisateursController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/general/utilisateurs',  ),));
    }

    private function getparametres_general_utilisateurs_listerRouteInfo()
    {
        return array(array (  0 => 'max',), array (  '_controller' => 'Backcon\\Parametres\\GeneralBundle\\Controller\\UtilisateursController::listerAction',  'max' => 15,), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'max',  ),  1 =>   array (    0 => 'text',    1 => '/backcon/parametres/general/utilisateurs/lister',  ),));
    }

    private function getparametres_general_utilisateurs_nouveauRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\GeneralBundle\\Controller\\UtilisateursController::ajouterAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/general/utilisateurs/nouveau',  ),));
    }

    private function getparametres_general_utilisateurs_supprimerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\GeneralBundle\\Controller\\UtilisateursController::supprimerAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/general/utilisateurs/supprimer',  ),));
    }

    private function getparametres_general_utilisateurs_etatRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\GeneralBundle\\Controller\\UtilisateursController::etatAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/general/utilisateurs/etat',  ),));
    }

    private function getparametres_congresRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\CongresBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/congres/',  ),));
    }

    private function getparametres_congres_avanceRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\Parametres\\CongresBundle\\Controller\\DefaultController::avanceAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/parametres/congres/avance',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/connexion/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/connexion/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/connexion/logout',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/connexion/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/connexion/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/connexion/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/connexion/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/connexion/change-password/change-password',  ),));
    }

    private function getdashboard_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backcon\\DashboardBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/profile/edit',  ),));
    }

    private function getfos_user_group_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/group/list',  ),));
    }

    private function getfos_user_group_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/group/new',  ),));
    }

    private function getfos_user_group_showRouteInfo()
    {
        return array(array (  0 => 'groupname',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'groupname',  ),  1 =>   array (    0 => 'text',    1 => '/backcon/dashboard/group',  ),));
    }

    private function getfos_user_group_editRouteInfo()
    {
        return array(array (  0 => 'groupname',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'groupname',  ),  2 =>   array (    0 => 'text',    1 => '/backcon/dashboard/group',  ),));
    }

    private function getfos_user_group_deleteRouteInfo()
    {
        return array(array (  0 => 'groupname',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'groupname',  ),  2 =>   array (    0 => 'text',    1 => '/backcon/dashboard/group',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/backcon/dashboard/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/backcon/dashboard/register/confirmed',  ),));
    }
}
