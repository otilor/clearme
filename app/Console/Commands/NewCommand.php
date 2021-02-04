<?php


namespace App\Console\Commands;




use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NewCommand extends Command
{
    protected function configure()
    {
        $this->setName('install')
            ->setDescription('Setup clearance application');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // TODO: Set up authorization

        // TODO: Seed database
        return Command::SUCCESS;
    }
}
