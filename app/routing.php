<?php
// routing.php
$routes = [
    'Static' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['login', '/login/', ['GET', 'POST']], // action, url, HTTP method
    ],
    'Joueur' => [ // Controller
        ['map', '/map/', ['GET', 'POST']],
        ['gain', '/gain/', ['GET', 'POST']],
        ['ranking', '/ranking/', ['GET', 'POST']],
    ],
    'Bonbon' => [ // Controller
        ['product', '/bonbon/{id}', 'GET'], // action, url, HTTP method
    ],
];