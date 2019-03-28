<?php

namespace Playground\Commands;

use Playground\Calc\GroupCalc;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class GroupCalcCommand extends Command
{
    protected static $defaultName = 'calc:group';

    protected function configure()
    {
        setlocale(LC_MONETARY,"en_US");

        $this->setDescription('Calculates family portion of a group bill.')
            ->addArgument('group', InputArgument::REQUIRED, 'The number of people in the group')
            ->addArgument('family', InputArgument::REQUIRED, 'The number of people in the family')
            ->addArgument('purchase', InputArgument::REQUIRED, 'The total cost for the group');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $group       = $input->getArgument('group');
        $family      = $input->getArgument('family');
        $purchase    = $input->getArgument('purchase');

        $perPerson   = GroupCalc::getPerPerson( (int) $purchase, (int) $group);
        $familyCost  = GroupCalc::getFamilyCost( (int) $family, $perPerson);
        $groupCost   = money_format('%n', $purchase);
        $personCost  = money_format('%n', $perPerson);
        $familyCost  = money_format('%n', $familyCost);

        $output->writeln("The group total is {$groupCost}");
        $output->writeln("The per person cost is {$personCost}");
        $output->writeln("The total for your family is {$familyCost}");
    }
}

