<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Productos;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\ProductosController::class,
                        'action'     => 'index',
                    ],
                ],
            ],

            'add' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/add',
                    'defaults' => [
                        'controller' => Controller\ProductosController::class,
                        'action'     => 'add',
                    ],
                ],
            ],

            'delete' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/delete',
                    'defaults' => [
                        'controller' => Controller\ProductosController::class,
                        'action'     => 'delete',
                    ],
                ],
            ],

            'edit' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/edit',
                    'defaults' => [
                        'controller' => Controller\ProductosController::class,
                        'action'     => 'edit',
                    ],
                ],
            ],

            'processadd' => [ 

                  'type' => Segment::class,
                  'options'=> [

                      'route'=> '/processadd',
                      'defaults'=> [

                          'controller'=> Controller\ProductosController::class,
                          'action'=> 'processadd',
                      ],
                  ],
            ],

            'processedit' => [ 

                  'type' => Segment::class,
                  'options'=> [

                      'route'=> '/processedit',
                      'defaults'=> [

                          'controller'=> Controller\ProductosController::class,
                          'action'=> 'processedit',
                      ],
                  ],
            ],

            'processdel' => [ 

                  'type' => Segment::class,
                  'options'=> [

                      'route'=> '/processdel',
                      'defaults'=> [

                          'controller'=> Controller\ProductosController::class,
                          'action'=> 'processdel',
                      ],
                  ],
            ],
            
        ],
    ],
    'controllers' => [
        'factories' => [
            
             Controller\ProductosController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
            'album' => __DIR__ . '/../view',
        ],
    ],
];
