<?php

use ConferenceTools\Admin\Controller\IndexController;
use Zend\Router\Http\Literal;

return [
    'admin' => [
        'type' => Literal::class,
        'may_terminate' => true,
        'options' => [
            'route' => '/admin',
            'defaults' => [
                'requiresAuth' => true,
                'layout' => 'admin/layout',
                'controller' => IndexController::class,
                'action' => 'index'
            ]
        ],
        'child_routes' => [

        ],
    ]
];