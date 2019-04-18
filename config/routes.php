<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Dishes', 'action' => 'index']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->connect('about-us/', ['controller' => 'Abouts', 'action' => 'index']);
    $routes->connect('menu/', ['controller' => 'Dishes', 'action' => 'menulist']);
    $routes->connect('gallery/', ['controller' => 'Galleries', 'action' => 'index']);
    $routes->connect('contact-us/', ['controller' => 'Contacts', 'action' => 'index']);
    $routes->connect('training/', ['controller' => 'Trainings', 'action' => 'index']);
    $routes->connect('training-details/', ['controller' => 'Trainings', 'action' => 'trainingdetails']);
    $routes->connect('menu-details/', ['controller' => 'Dishes', 'action' => 'menudetails']);
    $routes->connect('admin/', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('banner/', ['controller' => 'Banners', 'action' => 'index']);
    $routes->connect('about-bg/', ['controller' => 'Aboutusbanners', 'action' => 'index']);
    $routes->connect('aboutimages/', ['controller' => 'Aboutimages', 'action' => 'index']);
    $routes->connect('aboutus/', ['controller' => 'Abouts', 'action' => 'edit',1]);
    $routes->connect('gallery-bg-list/', ['controller' => 'Gallerybanners', 'action' => 'edit',1]);
    $routes->connect('gallery-photo-list/', ['controller' => 'Galleries', 'action' => 'photolist']);
    $routes->connect('gallery-photo-add/', ['controller' => 'Galleries', 'action' => 'add']);
    $routes->connect('list-category/', ['controller' => 'Categories', 'action' => 'index']);
    $routes->connect('add-category/', ['controller' => 'Categories', 'action' => 'add']);
    $routes->connect('add-dish/', ['controller' => 'Dishes', 'action' => 'add']);
    $routes->connect('list-dishes/', ['controller' => 'Dishes', 'action' => 'listdishes']);
    $routes->connect('list-training/', ['controller' => 'Trainings', 'action' => 'traininglist']);
    $routes->connect('add-training/', ['controller' => 'Trainings', 'action' => 'add']);
    $routes->connect('edit-contact/', ['controller' => 'Contacts', 'action' => 'edit', 1]);
    $routes->connect('list-blogs/', ['controller' => 'Blogs', 'action' => 'listblogs']);
    $routes->connect('add-blog/', ['controller' => 'Blogs', 'action' => 'add']);
    $routes->connect('list-blog-category/', ['controller' => 'Groups', 'action' => 'index']);
    $routes->connect('add-blog-category/', ['controller' => 'Groups', 'action' => 'add']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});
