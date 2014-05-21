<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            if (0 === strpos($pathinfo, '/css/bootstrap_')) {
                // _assetic_bootstrap_css_0
                if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                // _assetic_bootstrap_css_1
                if ($pathinfo === '/css/bootstrap_form_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    // _assetic_bootstrap_js_12
                    if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/js/jquery_jquery-1.10.2_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/notas')) {
            if (0 === strpos($pathinfo, '/notas/log')) {
                if (0 === strpos($pathinfo, '/notas/login')) {
                    // jamn_login
                    if ($pathinfo === '/notas/login') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\LoginController::loginAction',  '_route' => 'jamn_login',);
                    }

                    // jamn_login_check
                    if ($pathinfo === '/notas/login_check') {
                        return array('_route' => 'jamn_login_check');
                    }

                }

                // jamn_logout
                if ($pathinfo === '/notas/logout') {
                    return array('_route' => 'jamn_logout');
                }

            }

            // jamn_homepage
            if (rtrim($pathinfo, '/') === '/notas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_jamn_homepage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'jamn_homepage');
                }

                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',  '_route' => 'jamn_homepage',);
            }
            not_jamn_homepage:

            // jamn_conetiqueta
            if (0 === strpos($pathinfo, '/notas/conetiqueta') && preg_match('#^/notas/conetiqueta/(?P<etiqueta>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_jamn_conetiqueta;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jamn_conetiqueta')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',));
            }
            not_jamn_conetiqueta:

            // jamn_buscar
            if ($pathinfo === '/notas/buscar') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_jamn_buscar;
                }

                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',  'etiqueta' => 'termino',  '_route' => 'jamn_buscar',);
            }
            not_jamn_buscar:

            if (0 === strpos($pathinfo, '/notas/n')) {
                // jamn_nota
                if (0 === strpos($pathinfo, '/notas/nota') && preg_match('#^/notas/nota/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_jamn_nota;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jamn_nota')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',));
                }
                not_jamn_nota:

                // jamn_nueva
                if ($pathinfo === '/notas/nueva') {
                    return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::nuevaAction',  '_route' => 'jamn_nueva',);
                }

            }

            // jamn_editar
            if (0 === strpos($pathinfo, '/notas/editar') && preg_match('#^/notas/editar/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jamn_editar')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::editarAction',));
            }

            // jamn_borrar
            if (0 === strpos($pathinfo, '/notas/borrar') && preg_match('#^/notas/borrar/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jamn_borrar')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::borrarAction',));
            }

            // jamn_espacio_premium
            if ($pathinfo === '/notas/miespacio') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::espacioPremiumAction',  '_route' => 'jamn_espacio_premium',);
            }

            if (0 === strpos($pathinfo, '/notas/r')) {
                // jamn_rss
                if ($pathinfo === '/notas/rss') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_jamn_rss;
                    }

                    return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::rssAction',  '_route' => 'jamn_rss',);
                }
                not_jamn_rss:

                // jamn_registro
                if ($pathinfo === '/notas/registro') {
                    return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\LoginController::registroAction',  '_route' => 'jamn_registro',);
                }

            }

            // jamn_activar_cuenta
            if (0 === strpos($pathinfo, '/notas/activar') && preg_match('#^/notas/activar/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jamn_activar_cuenta')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\LoginController::activarAction',));
            }

            // jamn_tarifas
            if ($pathinfo === '/notas/tarifas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_jamn_tarifas;
                }

                return array (  '_controller' => 'JAMNotasFrontendBundle:Contratos:tarifasPremium',  '_route' => 'jamn_tarifas',);
            }
            not_jamn_tarifas:

            // jamn_contratar
            if ($pathinfo === '/notas/contratar') {
                return array (  '_controller' => 'JAMNotasFrontendBundle:Contratos:contratarPremium',  '_route' => 'jamn_contratar',);
            }

            if (0 === strpos($pathinfo, '/notas/estudio_')) {
                if (0 === strpos($pathinfo, '/notas/estudio_orm')) {
                    // JAMN_ORM_crear
                    if ($pathinfo === '/notas/estudio_orm/crear') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::crearAction',  '_route' => 'JAMN_ORM_crear',);
                    }

                    if (0 === strpos($pathinfo, '/notas/estudio_orm/recuperar')) {
                        // JAMN_ORM_recuperar
                        if (preg_match('#^/notas/estudio_orm/recuperar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'JAMN_ORM_recuperar')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::recuperarAction',));
                        }

                        // JAMN_ORM_recuperar_notas
                        if ($pathinfo === '/notas/estudio_orm/recuperar_notas') {
                            return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::recuperarNotasAction',  '_route' => 'JAMN_ORM_recuperar_notas',);
                        }

                    }

                    // JAMN_ORM_DQL
                    if ($pathinfo === '/notas/estudio_orm/dql') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::dqlAction',  '_route' => 'JAMN_ORM_DQL',);
                    }

                }

                if (0 === strpos($pathinfo, '/notas/estudio_valyforms')) {
                    // jamn_EVF
                    if ($pathinfo === '/notas/estudio_valyforms/valida_usuario') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioValidacionYFormularioController::validaUsuarioAction',  '_route' => 'jamn_EVF',);
                    }

                    // jamn_EVF_form_usuario
                    if ($pathinfo === '/notas/estudio_valyforms/form_usuario') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioValidacionYFormularioController::formUsuarioAction',  '_route' => 'jamn_EVF_form_usuario',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/aulasmentor/notasfrontend')) {
                if (0 === strpos($pathinfo, '/admin/aulasmentor/notasfrontend/tarifa')) {
                    // admin_aulasmentor_notasfrontend_tarifa_list
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/tarifa/list') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.notas_backend.admin.tarifa',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_tarifa_list',  '_route' => 'admin_aulasmentor_notasfrontend_tarifa_list',);
                    }

                    // admin_aulasmentor_notasfrontend_tarifa_create
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/tarifa/create') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.notas_backend.admin.tarifa',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_tarifa_create',  '_route' => 'admin_aulasmentor_notasfrontend_tarifa_create',);
                    }

                    // admin_aulasmentor_notasfrontend_tarifa_batch
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/tarifa/batch') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.notas_backend.admin.tarifa',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_tarifa_batch',  '_route' => 'admin_aulasmentor_notasfrontend_tarifa_batch',);
                    }

                    // admin_aulasmentor_notasfrontend_tarifa_edit
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/tarifa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_tarifa_edit')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.notas_backend.admin.tarifa',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_tarifa_edit',));
                    }

                    // admin_aulasmentor_notasfrontend_tarifa_delete
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/tarifa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_tarifa_delete')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.notas_backend.admin.tarifa',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_tarifa_delete',));
                    }

                    // admin_aulasmentor_notasfrontend_tarifa_show
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/tarifa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_tarifa_show')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.notas_backend.admin.tarifa',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_tarifa_show',));
                    }

                    // admin_aulasmentor_notasfrontend_tarifa_export
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/tarifa/export') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.notas_backend.admin.tarifa',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_tarifa_export',  '_route' => 'admin_aulasmentor_notasfrontend_tarifa_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/aulasmentor/notasfrontend/contrato')) {
                    // admin_aulasmentor_notasfrontend_contrato_list
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/contrato/list') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.notas_backend.admin.contratos',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_contrato_list',  '_route' => 'admin_aulasmentor_notasfrontend_contrato_list',);
                    }

                    // admin_aulasmentor_notasfrontend_contrato_create
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/contrato/create') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.notas_backend.admin.contratos',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_contrato_create',  '_route' => 'admin_aulasmentor_notasfrontend_contrato_create',);
                    }

                    // admin_aulasmentor_notasfrontend_contrato_batch
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/contrato/batch') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.notas_backend.admin.contratos',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_contrato_batch',  '_route' => 'admin_aulasmentor_notasfrontend_contrato_batch',);
                    }

                    // admin_aulasmentor_notasfrontend_contrato_edit
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/contrato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_contrato_edit')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.notas_backend.admin.contratos',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_contrato_edit',));
                    }

                    // admin_aulasmentor_notasfrontend_contrato_delete
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/contrato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_contrato_delete')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.notas_backend.admin.contratos',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_contrato_delete',));
                    }

                    // admin_aulasmentor_notasfrontend_contrato_show
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/contrato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_contrato_show')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.notas_backend.admin.contratos',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_contrato_show',));
                    }

                    // admin_aulasmentor_notasfrontend_contrato_export
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/contrato/export') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.notas_backend.admin.contratos',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_contrato_export',  '_route' => 'admin_aulasmentor_notasfrontend_contrato_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/aulasmentor/notasfrontend/grupo')) {
                    // admin_aulasmentor_notasfrontend_grupo_list
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/grupo/list') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.notas_backend.admin.grupo',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_grupo_list',  '_route' => 'admin_aulasmentor_notasfrontend_grupo_list',);
                    }

                    // admin_aulasmentor_notasfrontend_grupo_create
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/grupo/create') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.notas_backend.admin.grupo',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_grupo_create',  '_route' => 'admin_aulasmentor_notasfrontend_grupo_create',);
                    }

                    // admin_aulasmentor_notasfrontend_grupo_batch
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/grupo/batch') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.notas_backend.admin.grupo',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_grupo_batch',  '_route' => 'admin_aulasmentor_notasfrontend_grupo_batch',);
                    }

                    // admin_aulasmentor_notasfrontend_grupo_edit
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/grupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_grupo_edit')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.notas_backend.admin.grupo',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_grupo_edit',));
                    }

                    // admin_aulasmentor_notasfrontend_grupo_delete
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/grupo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_grupo_delete')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.notas_backend.admin.grupo',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_grupo_delete',));
                    }

                    // admin_aulasmentor_notasfrontend_grupo_show
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/grupo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_grupo_show')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.notas_backend.admin.grupo',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_grupo_show',));
                    }

                    // admin_aulasmentor_notasfrontend_grupo_export
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/grupo/export') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.notas_backend.admin.grupo',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_grupo_export',  '_route' => 'admin_aulasmentor_notasfrontend_grupo_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/aulasmentor/notasfrontend/publicidad')) {
                    // admin_aulasmentor_notasfrontend_publicidad_list
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/publicidad/list') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::listAction',  '_sonata_admin' => 'sonata.notas_backend.admin.publicidad',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_publicidad_list',  '_route' => 'admin_aulasmentor_notasfrontend_publicidad_list',);
                    }

                    // admin_aulasmentor_notasfrontend_publicidad_create
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/publicidad/create') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::createAction',  '_sonata_admin' => 'sonata.notas_backend.admin.publicidad',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_publicidad_create',  '_route' => 'admin_aulasmentor_notasfrontend_publicidad_create',);
                    }

                    // admin_aulasmentor_notasfrontend_publicidad_batch
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/publicidad/batch') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::batchAction',  '_sonata_admin' => 'sonata.notas_backend.admin.publicidad',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_publicidad_batch',  '_route' => 'admin_aulasmentor_notasfrontend_publicidad_batch',);
                    }

                    // admin_aulasmentor_notasfrontend_publicidad_edit
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/publicidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_publicidad_edit')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::editAction',  '_sonata_admin' => 'sonata.notas_backend.admin.publicidad',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_publicidad_edit',));
                    }

                    // admin_aulasmentor_notasfrontend_publicidad_delete
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/publicidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_publicidad_delete')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::deleteAction',  '_sonata_admin' => 'sonata.notas_backend.admin.publicidad',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_publicidad_delete',));
                    }

                    // admin_aulasmentor_notasfrontend_publicidad_show
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/publicidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_publicidad_show')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::showAction',  '_sonata_admin' => 'sonata.notas_backend.admin.publicidad',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_publicidad_show',));
                    }

                    // admin_aulasmentor_notasfrontend_publicidad_export
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/publicidad/export') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\AdminController::exportAction',  '_sonata_admin' => 'sonata.notas_backend.admin.publicidad',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_publicidad_export',  '_route' => 'admin_aulasmentor_notasfrontend_publicidad_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/aulasmentor/notasfrontend/usuario')) {
                    // admin_aulasmentor_notasfrontend_usuario_list
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/usuario/list') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\UsuarioAdminController::listAction',  '_sonata_admin' => 'sonata.notas_backend.admin.usuario',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_usuario_list',  '_route' => 'admin_aulasmentor_notasfrontend_usuario_list',);
                    }

                    // admin_aulasmentor_notasfrontend_usuario_create
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/usuario/create') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\UsuarioAdminController::createAction',  '_sonata_admin' => 'sonata.notas_backend.admin.usuario',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_usuario_create',  '_route' => 'admin_aulasmentor_notasfrontend_usuario_create',);
                    }

                    // admin_aulasmentor_notasfrontend_usuario_batch
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/usuario/batch') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\UsuarioAdminController::batchAction',  '_sonata_admin' => 'sonata.notas_backend.admin.usuario',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_usuario_batch',  '_route' => 'admin_aulasmentor_notasfrontend_usuario_batch',);
                    }

                    // admin_aulasmentor_notasfrontend_usuario_edit
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_usuario_edit')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\UsuarioAdminController::editAction',  '_sonata_admin' => 'sonata.notas_backend.admin.usuario',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_usuario_edit',));
                    }

                    // admin_aulasmentor_notasfrontend_usuario_delete
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_usuario_delete')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\UsuarioAdminController::deleteAction',  '_sonata_admin' => 'sonata.notas_backend.admin.usuario',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_usuario_delete',));
                    }

                    // admin_aulasmentor_notasfrontend_usuario_show
                    if (preg_match('#^/admin/aulasmentor/notasfrontend/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_aulasmentor_notasfrontend_usuario_show')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\UsuarioAdminController::showAction',  '_sonata_admin' => 'sonata.notas_backend.admin.usuario',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_usuario_show',));
                    }

                    // admin_aulasmentor_notasfrontend_usuario_export
                    if ($pathinfo === '/admin/aulasmentor/notasfrontend/usuario/export') {
                        return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\UsuarioAdminController::exportAction',  '_sonata_admin' => 'sonata.notas_backend.admin.usuario',  '_sonata_name' => 'admin_aulasmentor_notasfrontend_usuario_export',  '_route' => 'admin_aulasmentor_notasfrontend_usuario_export',);
                    }

                }

            }

        }

        // jam_notas_backend_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jam_notas_backend_homepage')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\DefaultController::indexAction',));
        }

        // JAMAB_homepage
        if (rtrim($pathinfo, '/') === '/alimentos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'JAMAB_homepage');
            }

            return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'JAMAB_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Yoda\\UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Yoda\\UserBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Yoda\\UserBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/notas/tarifa')) {
            // tarifa
            if (rtrim($pathinfo, '/') === '/notas/tarifa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tarifa');
                }

                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\TarifaController::indexAction',  '_route' => 'tarifa',);
            }

            // tarifa_show
            if (preg_match('#^/notas/tarifa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarifa_show')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\TarifaController::showAction',));
            }

            // tarifa_new
            if ($pathinfo === '/notas/tarifa/new') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\TarifaController::newAction',  '_route' => 'tarifa_new',);
            }

            // tarifa_create
            if ($pathinfo === '/notas/tarifa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tarifa_create;
                }

                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\TarifaController::createAction',  '_route' => 'tarifa_create',);
            }
            not_tarifa_create:

            // tarifa_edit
            if (preg_match('#^/notas/tarifa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarifa_edit')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\TarifaController::editAction',));
            }

            // tarifa_update
            if (preg_match('#^/notas/tarifa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tarifa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarifa_update')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\TarifaController::updateAction',));
            }
            not_tarifa_update:

            // tarifa_delete
            if (preg_match('#^/notas/tarifa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tarifa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarifa_delete')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\TarifaController::deleteAction',));
            }
            not_tarifa_delete:

        }

        // _welcome
        if ($pathinfo === '/welcome') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
