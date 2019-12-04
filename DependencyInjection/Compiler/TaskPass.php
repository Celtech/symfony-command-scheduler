<?php
/**
 * TaskPass.php
 * SymfonyCommandScheduler
 *
 * Copyright 2019 Guns.com, All rights reserved.
 * ---------------------------
 * Date: 12/3/19
 * Url: http://guns.com
 */

namespace Symfony\SchedulerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class TaskPass
 * @package Symfony\SchedulerBundle\DependencyInjection\Compiler
 *
 * Adds services tagged with "scheduler.task" to the scheduler
 */
class TaskPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->findDefinition('scheduler.scheduler');
        $tasks = $container->findTaggedServiceIds('scheduler.task');

        foreach ($tasks as $id => $tags) {
            $definition->addMethodCall("addTask", [new Reference($id)]);
        }
    }
}