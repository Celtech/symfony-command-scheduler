<?php
/**
 * Scheduler.php
 * SymfonyCommandScheduler
 *
 * Copyright 2019 Guns.com, All rights reserved.
 * ---------------------------
 * Date: 12/3/19
 * Url: http://guns.com
 */

namespace Symfony\SchedulerBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\SchedulerBundle\DependencyInjection\Compiler\TaskPass;

final class SchedulerBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new TaskPass());
    }
}
