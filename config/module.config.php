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
            'ConferenceTools\Attendance\Controller' => 'attendance',
        ],
        'template_map' => [
            'admin/layout' => __DIR__ . '/../view/layout.phtml',
        ],
    ],
];