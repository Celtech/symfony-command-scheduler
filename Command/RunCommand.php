<?php
/**
 * RunCommand.php
 * SymfonyCommandScheduler
 *
 * Copyright 2019 Guns.com, All rights reserved.
 * ---------------------------
 * Date: 12/3/19
 * Url: http://guns.com
 */

namespace Symfony\SchedulerBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\SchedulerBundle\Services\Scheduler;

class RunCommand extends Command
{
    /**
     * @var Scheduler
     */
    private $scheduler;

    public function __construct(Scheduler $scheduler)
    {
        parent::__construct();
        $this->scheduler = $scheduler;
    }

    protected function configure()
    {
        $this
            ->setName("scheduler:run")
            ->setDescription("Run all scheduled tasks.")
            ->setHelp("");
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return $this->scheduler->run();
    }
}
