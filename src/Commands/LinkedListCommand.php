<?php

namespace Playground\Commands;

use Playground\DataStructures\LinkedList\NodeList;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class LinkedListCommand extends Command
{
    protected static $defaultName = 'ds:linked_list';

    protected function configure()
    {
        $this->setDescription('Output a linked list.')
            ->addArgument('limit', InputArgument::REQUIRED, 'The number of nodes to create.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $limit       = (int) $input->getArgument('limit');
        $nodeList    = new NodeList($limit);

    }
}

