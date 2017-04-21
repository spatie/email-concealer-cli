<?php

namespace Spatie\EmailConcealerCLI;

use Spatie\EmailConcealer\Concealer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConcealCommand extends Command
{
    protected function configure()
    {
        $this->setName('conceal');
        
        $this->setDescription('Conceal all e-mail addresses in a file.');

        $this->addArgument('src', InputArgument::REQUIRED, 'Path to the input file');
        $this->addArgument('dest', InputArgument::OPTIONAL, 'Path to the destination file. Optional, leave empty to print output', null);

        $this->addOption('overwrite', 'o', InputOption::VALUE_NONE, 'Overwrite the input file');
        $this->addOption('domain', 'd', InputOption::VALUE_REQUIRED, 
            'The domain that should be used to concealed. Default: "example.com"', 'example.com');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if ($input->getOption('overwrite') && $input->getArgument('dest')) {
            $output->writeln("Can't specify a destination and overwrite the source file at the same time");
            return 1;
        }

        $src = $input->getArgument('src');
        $dest = $input->getOption('overwrite') ? $src : $input->getArgument('dest');

        if (! file_exists($src)) {
            $output->writeln("File not found at path `$src`");
            return 1;
        }

        $concealer = Concealer::create()->domain(
            $input->getOption('domain')
        );

        $concealed = $concealer->conceal(
            file_get_contents($src)
        );

        if ($dest) {
            file_put_contents($dest, $concealed);
        } else {
            $output->write($concealed);
        }

        return 0;
    }
}
