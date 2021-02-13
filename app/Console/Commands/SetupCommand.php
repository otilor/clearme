<?php


namespace App\Console\Commands;




use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupCommand extends Command
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

        $output->writeln(PHP_EOL . 'Setting up project 🚀🚀');
        exec('php artisan migrate');
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
        $output->writeln(PHP_EOL.'<comment>Setup complete! Enjoy the application.</comment>');
        return Command::SUCCESS;
    }
}
