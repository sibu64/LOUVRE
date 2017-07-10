<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/admin/episode')) {
            // admin_episode_index
            if ('/admin/episode' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_episode_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_episode_index');
                }

                return array (  '_controller' => 'OC\\BlogBundle\\Controller\\EpisodeController::indexAction',  '_route' => 'admin_episode_index',);
            }
            not_admin_episode_index:

            // admin_episode_show
            if (preg_match('#^/admin/episode/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_episode_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_episode_show')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\EpisodeController::showAction',));
            }
            not_admin_episode_show:

            // admin_episode_new
            if ('/admin/episode/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_episode_new;
                }

                return array (  '_controller' => 'OC\\BlogBundle\\Controller\\EpisodeController::newAction',  '_route' => 'admin_episode_new',);
            }
            not_admin_episode_new:

            // admin_episode_edit
            if (preg_match('#^/admin/episode/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_episode_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_episode_edit')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\EpisodeController::editAction',));
            }
            not_admin_episode_edit:

            // admin_episode_delete
            if (preg_match('#^/admin/episode/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_admin_episode_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_episode_delete')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\EpisodeController::deleteAction',));
            }
            not_admin_episode_delete:

        }

        // oc_blog_homepage
        if (preg_match('#^/(?P<numeroEpisode>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_blog_homepage')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\DefaultController::indexAction',  'numeroEpisode' => 1,));
        }

        if (0 === strpos($pathinfo, '/admin/commentaire')) {
            // admin_commentaire_index
            if ('/admin/commentaire' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin_commentaire_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_commentaire_index');
                }

                return array (  '_controller' => 'OC\\BlogBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'admin_commentaire_index',);
            }
            not_admin_commentaire_index:

            // admin_commentaire_edit
            if (preg_match('#^/admin/commentaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_commentaire_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_commentaire_edit')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\CommentaireController::editAction',));
            }
            not_admin_commentaire_edit:

            // oc_blog_licite
            if (0 === strpos($pathinfo, '/admin/commentaire/licite') && preg_match('#^/admin/commentaire/licite/(?P<commentaire>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_blog_licite')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\CommentaireController::liciteCommentaireAction',));
            }

            // oc_blog_modere
            if (0 === strpos($pathinfo, '/admin/commentaire/modere') && preg_match('#^/admin/commentaire/modere/(?P<commentaire>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_blog_modere')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\CommentaireController::modereCommentaireAction',));
            }

        }

        // oc_blog_signalement
        if (0 === strpos($pathinfo, '/signalement') && preg_match('#^/signalement/(?P<commentaire>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_blog_signalement')), array (  '_controller' => 'OC\\BlogBundle\\Controller\\DefaultController::signalementCommentaireAction',));
        }

        // oc_user_homepage
        if ('/user' === $pathinfo) {
            return array (  '_controller' => 'OC\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'oc_user_homepage',);
        }

        // oc_user_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'OC\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oc_user_login',);
        }

        // oc_user_logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'oc_user_logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
