<?php

namespace Container0JdarXb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kyx5dFoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kyx5dFo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kyx5dFo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClienteController::delete' => ['privates', '.service_locator.x8ybJ29', 'get_ServiceLocator_X8ybJ29Service', true],
            'App\\Controller\\ClienteController::edit' => ['privates', '.service_locator.x8ybJ29', 'get_ServiceLocator_X8ybJ29Service', true],
            'App\\Controller\\ClienteController::index' => ['privates', '.service_locator.CbqQBeU', 'get_ServiceLocator_CbqQBeUService', true],
            'App\\Controller\\ClienteController::new' => ['privates', '.service_locator.CbqQBeU', 'get_ServiceLocator_CbqQBeUService', true],
            'App\\Controller\\ClienteController::show' => ['privates', '.service_locator.FWfeBs9', 'get_ServiceLocator_FWfeBs9Service', true],
            'App\\Controller\\FabricanteController::delete' => ['privates', '.service_locator.GayI6Pf', 'get_ServiceLocator_GayI6PfService', true],
            'App\\Controller\\FabricanteController::edit' => ['privates', '.service_locator.GayI6Pf', 'get_ServiceLocator_GayI6PfService', true],
            'App\\Controller\\FabricanteController::index' => ['privates', '.service_locator.El5pK6x', 'get_ServiceLocator_El5pK6xService', true],
            'App\\Controller\\FabricanteController::new' => ['privates', '.service_locator.El5pK6x', 'get_ServiceLocator_El5pK6xService', true],
            'App\\Controller\\FabricanteController::show' => ['privates', '.service_locator.T2xDDIs', 'get_ServiceLocator_T2xDDIsService', true],
            'App\\Controller\\PedidoController::delete' => ['privates', '.service_locator.aCL33_q', 'get_ServiceLocator_ACL33QService', true],
            'App\\Controller\\PedidoController::edit' => ['privates', '.service_locator.aCL33_q', 'get_ServiceLocator_ACL33QService', true],
            'App\\Controller\\PedidoController::index' => ['privates', '.service_locator.nFmYUSk', 'get_ServiceLocator_NFmYUSkService', true],
            'App\\Controller\\PedidoController::new' => ['privates', '.service_locator.nFmYUSk', 'get_ServiceLocator_NFmYUSkService', true],
            'App\\Controller\\PedidoController::show' => ['privates', '.service_locator.nzQNv7j', 'get_ServiceLocator_NzQNv7jService', true],
            'App\\Controller\\ProductoController::delete' => ['privates', '.service_locator._i2YZ1n', 'get_ServiceLocator_I2YZ1nService', true],
            'App\\Controller\\ProductoController::edit' => ['privates', '.service_locator._i2YZ1n', 'get_ServiceLocator_I2YZ1nService', true],
            'App\\Controller\\ProductoController::index' => ['privates', '.service_locator.TyPUV8N', 'get_ServiceLocator_TyPUV8NService', true],
            'App\\Controller\\ProductoController::new' => ['privates', '.service_locator.TyPUV8N', 'get_ServiceLocator_TyPUV8NService', true],
            'App\\Controller\\ProductoController::show' => ['privates', '.service_locator.WNlvOqm', 'get_ServiceLocator_WNlvOqmService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ClienteController:delete' => ['privates', '.service_locator.x8ybJ29', 'get_ServiceLocator_X8ybJ29Service', true],
            'App\\Controller\\ClienteController:edit' => ['privates', '.service_locator.x8ybJ29', 'get_ServiceLocator_X8ybJ29Service', true],
            'App\\Controller\\ClienteController:index' => ['privates', '.service_locator.CbqQBeU', 'get_ServiceLocator_CbqQBeUService', true],
            'App\\Controller\\ClienteController:new' => ['privates', '.service_locator.CbqQBeU', 'get_ServiceLocator_CbqQBeUService', true],
            'App\\Controller\\ClienteController:show' => ['privates', '.service_locator.FWfeBs9', 'get_ServiceLocator_FWfeBs9Service', true],
            'App\\Controller\\FabricanteController:delete' => ['privates', '.service_locator.GayI6Pf', 'get_ServiceLocator_GayI6PfService', true],
            'App\\Controller\\FabricanteController:edit' => ['privates', '.service_locator.GayI6Pf', 'get_ServiceLocator_GayI6PfService', true],
            'App\\Controller\\FabricanteController:index' => ['privates', '.service_locator.El5pK6x', 'get_ServiceLocator_El5pK6xService', true],
            'App\\Controller\\FabricanteController:new' => ['privates', '.service_locator.El5pK6x', 'get_ServiceLocator_El5pK6xService', true],
            'App\\Controller\\FabricanteController:show' => ['privates', '.service_locator.T2xDDIs', 'get_ServiceLocator_T2xDDIsService', true],
            'App\\Controller\\PedidoController:delete' => ['privates', '.service_locator.aCL33_q', 'get_ServiceLocator_ACL33QService', true],
            'App\\Controller\\PedidoController:edit' => ['privates', '.service_locator.aCL33_q', 'get_ServiceLocator_ACL33QService', true],
            'App\\Controller\\PedidoController:index' => ['privates', '.service_locator.nFmYUSk', 'get_ServiceLocator_NFmYUSkService', true],
            'App\\Controller\\PedidoController:new' => ['privates', '.service_locator.nFmYUSk', 'get_ServiceLocator_NFmYUSkService', true],
            'App\\Controller\\PedidoController:show' => ['privates', '.service_locator.nzQNv7j', 'get_ServiceLocator_NzQNv7jService', true],
            'App\\Controller\\ProductoController:delete' => ['privates', '.service_locator._i2YZ1n', 'get_ServiceLocator_I2YZ1nService', true],
            'App\\Controller\\ProductoController:edit' => ['privates', '.service_locator._i2YZ1n', 'get_ServiceLocator_I2YZ1nService', true],
            'App\\Controller\\ProductoController:index' => ['privates', '.service_locator.TyPUV8N', 'get_ServiceLocator_TyPUV8NService', true],
            'App\\Controller\\ProductoController:new' => ['privates', '.service_locator.TyPUV8N', 'get_ServiceLocator_TyPUV8NService', true],
            'App\\Controller\\ProductoController:show' => ['privates', '.service_locator.WNlvOqm', 'get_ServiceLocator_WNlvOqmService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ClienteController::delete' => '?',
            'App\\Controller\\ClienteController::edit' => '?',
            'App\\Controller\\ClienteController::index' => '?',
            'App\\Controller\\ClienteController::new' => '?',
            'App\\Controller\\ClienteController::show' => '?',
            'App\\Controller\\FabricanteController::delete' => '?',
            'App\\Controller\\FabricanteController::edit' => '?',
            'App\\Controller\\FabricanteController::index' => '?',
            'App\\Controller\\FabricanteController::new' => '?',
            'App\\Controller\\FabricanteController::show' => '?',
            'App\\Controller\\PedidoController::delete' => '?',
            'App\\Controller\\PedidoController::edit' => '?',
            'App\\Controller\\PedidoController::index' => '?',
            'App\\Controller\\PedidoController::new' => '?',
            'App\\Controller\\PedidoController::show' => '?',
            'App\\Controller\\ProductoController::delete' => '?',
            'App\\Controller\\ProductoController::edit' => '?',
            'App\\Controller\\ProductoController::index' => '?',
            'App\\Controller\\ProductoController::new' => '?',
            'App\\Controller\\ProductoController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ClienteController:delete' => '?',
            'App\\Controller\\ClienteController:edit' => '?',
            'App\\Controller\\ClienteController:index' => '?',
            'App\\Controller\\ClienteController:new' => '?',
            'App\\Controller\\ClienteController:show' => '?',
            'App\\Controller\\FabricanteController:delete' => '?',
            'App\\Controller\\FabricanteController:edit' => '?',
            'App\\Controller\\FabricanteController:index' => '?',
            'App\\Controller\\FabricanteController:new' => '?',
            'App\\Controller\\FabricanteController:show' => '?',
            'App\\Controller\\PedidoController:delete' => '?',
            'App\\Controller\\PedidoController:edit' => '?',
            'App\\Controller\\PedidoController:index' => '?',
            'App\\Controller\\PedidoController:new' => '?',
            'App\\Controller\\PedidoController:show' => '?',
            'App\\Controller\\ProductoController:delete' => '?',
            'App\\Controller\\ProductoController:edit' => '?',
            'App\\Controller\\ProductoController:index' => '?',
            'App\\Controller\\ProductoController:new' => '?',
            'App\\Controller\\ProductoController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}