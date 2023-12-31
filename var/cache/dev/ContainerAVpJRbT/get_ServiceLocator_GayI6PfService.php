<?php

namespace ContainerAVpJRbT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GayI6PfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GayI6Pf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GayI6Pf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fabricante' => ['privates', '.errored..service_locator.GayI6Pf.App\\Entity\\Fabricante', NULL, 'Cannot autowire service ".service_locator.GayI6Pf": it references class "App\\Entity\\Fabricante" but no such service exists.'],
            'fabricanteRepository' => ['privates', 'App\\Repository\\FabricanteRepository', 'getFabricanteRepositoryService', true],
        ], [
            'fabricante' => 'App\\Entity\\Fabricante',
            'fabricanteRepository' => 'App\\Repository\\FabricanteRepository',
        ]);
    }
}
