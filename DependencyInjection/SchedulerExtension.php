<?php
/**
 * SchedulerExtension.php
 * SymfonyCommandScheduler
 *
 * Copyright 2019 Guns.com, All rights reserved.
 * ---------------------------
 * Date: 12/3/19
 * Url: http://guns.com
 */

namespace Symfony\SchedulerBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SchedulerExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
    }
}
