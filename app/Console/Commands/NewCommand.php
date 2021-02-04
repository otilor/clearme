<?php


namespace App\Console\Commands;




use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
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
        $progressBar = new ProgressBar($output, 50);
        $progressBar->start();

        $output->writeln('Setting up project 🚀🚀');
        $i = 0;
        while ($i++ < 5) {
            // Clear permission cache
            exec('php artisan permission:cache-reset');

            $progressBar->advance();

            exec('php artisan db:seed');
            $progressBar->advance();
            exec('php artisan db:seed AdminSeeder::class');

        }

        $progressBar->finish();
        // TODO: Seed database
        return Command::SUCCESS;
    }
}
