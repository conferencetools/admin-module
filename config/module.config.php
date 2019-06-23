<?php

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            ConferenceTools\Admin\Controller\IndexController::class =>  InvokableFactory::class,
        ]
    ],
    'controller_plugins' => [
        'factories' => [
            'form' => \ConferenceTools\Admin\Mvc\Controller\Plugin\FormFactory::class,
        ],
    ],
    'navigation' => require __DIR__ . '/navigation.config.php',
    'router' => [
        'routes' => require __DIR__ . '/routes.config.php',
    ],
    'view_manager' => [
        'controller_map' => [
            'ConferenceTools\Admin\Controller' => 'admin',
        ],
        'template_map' => [
            'admin/layout' => __DIR__ . '/../view/layout.phtml',
            'admin/index/index' => __DIR__ . '/../view/dashboard.phtml'
        ],
    ],
    'auth' => [
        'redirects' => [
            'default' => 'admin',
        ]
    ]
];