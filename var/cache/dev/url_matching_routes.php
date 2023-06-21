<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/fabricante' => [[['_route' => 'app_fabricante_index', '_controller' => 'App\\Controller\\FabricanteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/fabricante/new' => [[['_route' => 'app_fabricante_new', '_controller' => 'App\\Controller\\FabricanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto' => [[['_route' => 'app_producto_index', '_controller' => 'App\\Controller\\ProductoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/producto/new' => [[['_route' => 'app_producto_new', '_controller' => 'App\\Controller\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cliente' => [[['_route' => 'app_cliente_index', '_controller' => 'App\\Controller\\ClienteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cliente/new' => [[['_route' => 'app_cliente_new', '_controller' => 'App\\Controller\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pedido' => [[['_route' => 'app_pedido_index', '_controller' => 'App\\Controller\\PedidoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pedido/new' => [[['_route' => 'app_pedido_new', '_controller' => 'App\\Controller\\PedidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/fabricante/([^/]++)(?'
                    .'|(*:65)'
                    .'|/edit(*:77)'
                    .'|(*:84)'
                .')'
                .'|/p(?'
                    .'|roducto/([^/]++)(?'
                        .'|(*:116)'
                        .'|/edit(*:129)'
                        .'|(*:137)'
                    .')'
                    .'|edido/([^/]++)(?'
                        .'|(*:163)'
                        .'|/edit(*:176)'
                        .'|(*:184)'
                    .')'
                .')'
                .'|/cliente/([^/]++)(?'
                    .'|(*:214)'
                    .'|/edit(*:227)'
                    .'|(*:235)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'app_fabricante_show', '_controller' => 'App\\Controller\\FabricanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_fabricante_edit', '_controller' => 'App\\Controller\\FabricanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'app_fabricante_delete', '_controller' => 'App\\Controller\\FabricanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        116 => [[['_route' => 'app_producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        129 => [[['_route' => 'app_producto_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        137 => [[['_route' => 'app_producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        163 => [[['_route' => 'app_pedido_show', '_controller' => 'App\\Controller\\PedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'app_pedido_edit', '_controller' => 'App\\Controller\\PedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        184 => [[['_route' => 'app_pedido_delete', '_controller' => 'App\\Controller\\PedidoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        214 => [[['_route' => 'app_cliente_show', '_controller' => 'App\\Controller\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        227 => [[['_route' => 'app_cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        235 => [
            [['_route' => 'app_cliente_delete', '_controller' => 'App\\Controller\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
