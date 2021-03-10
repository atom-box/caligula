<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;


/*_
 | |
 | |_    ___
 | __|_ / _ \
 | |_| | (_) |
  \__| |\___/
  / _` |/ _ \
 | (_| | (_) |
  \__,_|\___/

  MVP time brother:
 1) reference the product class
 2) feed a fake file at the top here    $file = [asdfasdfasdfasdfasdff];
 3) persist it to a fake db (just an array called db)
  */










class MakeNewProductCommand extends Command
{
    protected static $defaultName = 'makeNewProduct';

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
