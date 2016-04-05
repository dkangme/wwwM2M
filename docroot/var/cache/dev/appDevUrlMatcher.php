<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // auth_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'auth_default_index');
            }

            return array (  '_controller' => 'AuthBundle\\Controller\\DefaultController::indexAction',  '_route' => 'auth_default_index',);
        }

        if (0 === strpos($pathinfo, '/data/alarm')) {
            // data_alarm_index
            if (rtrim($pathinfo, '/') === '/data/alarm') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_data_alarm_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'data_alarm_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AlarmController::indexAction',  '_route' => 'data_alarm_index',);
            }
            not_data_alarm_index:

            // data_alarm_new
            if ($pathinfo === '/data/alarm/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_data_alarm_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AlarmController::newAction',  '_route' => 'data_alarm_new',);
            }
            not_data_alarm_new:

            // data_alarm_show
            if (preg_match('#^/data/alarm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_data_alarm_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_alarm_show')), array (  '_controller' => 'AppBundle\\Controller\\AlarmController::showAction',));
            }
            not_data_alarm_show:

            // data_alarm_edit
            if (preg_match('#^/data/alarm/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_data_alarm_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_alarm_edit')), array (  '_controller' => 'AppBundle\\Controller\\AlarmController::editAction',));
            }
            not_data_alarm_edit:

            // data_alarm_delete
            if (preg_match('#^/data/alarm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_data_alarm_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_alarm_delete')), array (  '_controller' => 'AppBundle\\Controller\\AlarmController::deleteAction',));
            }
            not_data_alarm_delete:

        }

        if (0 === strpos($pathinfo, '/admin/customer')) {
            // admin_customer_index
            if (rtrim($pathinfo, '/') === '/admin/customer') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_customer_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_customer_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::indexAction',  '_route' => 'admin_customer_index',);
            }
            not_admin_customer_index:

            // admin_customer_new
            if ($pathinfo === '/admin/customer/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_customer_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::newAction',  '_route' => 'admin_customer_new',);
            }
            not_admin_customer_new:

            // admin_customer_show
            if (preg_match('#^/admin/customer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_customer_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_show')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::showAction',));
            }
            not_admin_customer_show:

            // admin_customer_edit
            if (preg_match('#^/admin/customer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_customer_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_edit')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::editAction',));
            }
            not_admin_customer_edit:

            // admin_customer_delete
            if (preg_match('#^/admin/customer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_customer_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_customer_delete')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::deleteAction',));
            }
            not_admin_customer_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // caicai_report
        if (0 === strpos($pathinfo, '/caicai') && preg_match('#^/caicai/(?P<imei>[^/]++)/(?P<ch1>[^/]++)/(?P<ch2>[^/]++)/(?P<ch3>[^/]++)/(?P<ch4>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_caicai_report;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caicai_report')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::caicaiAction',));
        }
        not_caicai_report:

        if (0 === strpos($pathinfo, '/data')) {
            if (0 === strpos($pathinfo, '/data/evento')) {
                // data_evento_index
                if (rtrim($pathinfo, '/') === '/data/evento') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_evento_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'data_evento_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EventoController::indexAction',  '_route' => 'data_evento_index',);
                }
                not_data_evento_index:

                // data_evento_show
                if (preg_match('#^/data/evento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_evento_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_evento_show')), array (  '_controller' => 'AppBundle\\Controller\\EventoController::showAction',));
                }
                not_data_evento_show:

            }

            if (0 === strpos($pathinfo, '/data/notificationlist')) {
                // data_notificationlist_index
                if (rtrim($pathinfo, '/') === '/data/notificationlist') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_notificationlist_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'data_notificationlist_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NotificationlistController::indexAction',  '_route' => 'data_notificationlist_index',);
                }
                not_data_notificationlist_index:

                // data_notificationlist_new
                if ($pathinfo === '/data/notificationlist/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_data_notificationlist_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NotificationlistController::newAction',  '_route' => 'data_notificationlist_new',);
                }
                not_data_notificationlist_new:

                // data_notificationlist_show
                if (preg_match('#^/data/notificationlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_notificationlist_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_notificationlist_show')), array (  '_controller' => 'AppBundle\\Controller\\NotificationlistController::showAction',));
                }
                not_data_notificationlist_show:

                // data_notificationlist_edit
                if (preg_match('#^/data/notificationlist/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_data_notificationlist_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_notificationlist_edit')), array (  '_controller' => 'AppBundle\\Controller\\NotificationlistController::editAction',));
                }
                not_data_notificationlist_edit:

                // data_notificationlist_delete
                if (preg_match('#^/data/notificationlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_data_notificationlist_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_notificationlist_delete')), array (  '_controller' => 'AppBundle\\Controller\\NotificationlistController::deleteAction',));
                }
                not_data_notificationlist_delete:

            }

            if (0 === strpos($pathinfo, '/data/sensor')) {
                // data_sensor_index
                if (rtrim($pathinfo, '/') === '/data/sensor') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_sensor_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'data_sensor_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SensorController::indexAction',  '_route' => 'data_sensor_index',);
                }
                not_data_sensor_index:

                // data_sensor_dashboard
                if ($pathinfo === '/data/sensor/dashboard') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_sensor_dashboard;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SensorController::dashboardAction',  '_route' => 'data_sensor_dashboard',);
                }
                not_data_sensor_dashboard:

                // data_sensor_export
                if ($pathinfo === '/data/sensor/exportdata') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_sensor_export;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SensorController::exportDataAction',  '_route' => 'data_sensor_export',);
                }
                not_data_sensor_export:

                // data_sensor_json_index
                if ($pathinfo === '/data/sensor/json') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_sensor_json_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SensorController::jsonSensorAction',  '_route' => 'data_sensor_json_index',);
                }
                not_data_sensor_json_index:

                // data_sensor_linechart
                if (0 === strpos($pathinfo, '/data/sensor/chart') && preg_match('#^/data/sensor/chart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_sensor_linechart;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_sensor_linechart')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::viewChartAction',));
                }
                not_data_sensor_linechart:

                if (0 === strpos($pathinfo, '/data/sensor/get24')) {
                    // data_last24h_sensor
                    if (preg_match('#^/data/sensor/get24/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_data_last24h_sensor;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_last24h_sensor')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::last24hAction',));
                    }
                    not_data_last24h_sensor:

                    // data_last24csv_sensor
                    if (0 === strpos($pathinfo, '/data/sensor/get24csv') && preg_match('#^/data/sensor/get24csv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_data_last24csv_sensor;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_last24csv_sensor')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::last24csvAction',));
                    }
                    not_data_last24csv_sensor:

                }

                // data_sensor_new
                if ($pathinfo === '/data/sensor/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_data_sensor_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SensorController::newAction',  '_route' => 'data_sensor_new',);
                }
                not_data_sensor_new:

                // data_sensor_show
                if (preg_match('#^/data/sensor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_sensor_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_sensor_show')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::showAction',));
                }
                not_data_sensor_show:

                // data_sensor_edit
                if (preg_match('#^/data/sensor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_data_sensor_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_sensor_edit')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::editAction',));
                }
                not_data_sensor_edit:

                // data_sensor_delete
                if (preg_match('#^/data/sensor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_data_sensor_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_sensor_delete')), array (  '_controller' => 'AppBundle\\Controller\\SensorController::deleteAction',));
                }
                not_data_sensor_delete:

            }

            if (0 === strpos($pathinfo, '/data/modwei')) {
                // data_modwei_index
                if (rtrim($pathinfo, '/') === '/data/modwei') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_modwei_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'data_modwei_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WeiController::indexAction',  '_route' => 'data_modwei_index',);
                }
                not_data_modwei_index:

                // data_modwei_new
                if ($pathinfo === '/data/modwei/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_data_modwei_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WeiController::newAction',  '_route' => 'data_modwei_new',);
                }
                not_data_modwei_new:

                // data_modwei_show
                if (preg_match('#^/data/modwei/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_data_modwei_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_modwei_show')), array (  '_controller' => 'AppBundle\\Controller\\WeiController::showAction',));
                }
                not_data_modwei_show:

                // data_modwei_edit
                if (preg_match('#^/data/modwei/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_data_modwei_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_modwei_edit')), array (  '_controller' => 'AppBundle\\Controller\\WeiController::editAction',));
                }
                not_data_modwei_edit:

                // data_modwei_delete
                if (preg_match('#^/data/modwei/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_data_modwei_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_modwei_delete')), array (  '_controller' => 'AppBundle\\Controller\\WeiController::deleteAction',));
                }
                not_data_modwei_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
