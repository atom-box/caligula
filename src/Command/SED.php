<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SED extends Command{
    // NOTE!
    protected static $defaultName = 'app:SED';

    protected function configure(){
        // coming soon: code
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        echo "Charlie tastes tuna of the sea.\n";
        return Command::SUCCESS;
        // return Command::FAILURE;
    }



}

// Commands are defined in classes extending Symfony\Component\Console\Command\Command