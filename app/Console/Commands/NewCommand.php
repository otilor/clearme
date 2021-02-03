<?php


namespace App\Console\Commands;




use Symfony\Component\Console\Command\Command;

class NewCommand extends Command
{
    protected function configure()
    {
        $this->setName('install')
            ->setDescription('Setup clearance application');
    }

}
