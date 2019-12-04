<?php
/**
 * Configuration.php
 * SymfonyCommandScheduler
 *
 * Copyright 2019 Guns.com, All rights reserved.
 * ---------------------------
 * Date: 12/3/19
 * Url: http://guns.com
 */

namespace Symfony\SchedulerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use function method_exists;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('task_scheduler');

        if (false === method_exists($treeBuilder, 'getRootNode')) {
            // BC layer for symfony/config 4.1 and older
            $treeBuilder->root('task_scheduler');
        }

        return $treeBuilder;
    }
}
