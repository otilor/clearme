<?php


namespace App\Console\Commands;




use Illuminate\Support\Facades\Artisan;
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
        $output->writeln('Setting up project 🚀🚀');

        // Clear permission cache
        exec('php artisan permission:cache-reset');

        // TODO: Seed database
        return Command::SUCCESS;
    }
}
