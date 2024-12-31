<?php

use Cake\Routing\Route\DashedRoute;

$routes->plugin(
    'OrcaServices/Heartbeat',
    ['path' => '/healthcheck'],
    function ($routes) {
        $routes->setRouteClass(DashedRoute::class);

        $routes->get('/', ['controller' => 'Heartbeat', 'action' => 'index']);
    }
);

$routes->setExtensions(['json']);
