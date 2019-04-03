<?php

namespace Playground\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServeCommand extends Command
{
    protected function configure()
    {
        $this->setName('serve')->setDescription('Starts PHP development server.');
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $host = 'localhost';
        $port = 8080;

        chdir(__DIR__ . '/../../public');

        $output->writeln("PHP development server started on http://{$host}:{$port}/");

        passthru(PHP_BINARY . " -S {$host}:{$port} 2>&1");
    }

}

