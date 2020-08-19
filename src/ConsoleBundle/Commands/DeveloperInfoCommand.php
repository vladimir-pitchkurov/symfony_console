<?php


namespace App\ConsoleBundle\Commands;

use App\ConsoleBundle\Models\Developer;
use App\ConsoleBundle\Traits\GetClassMethodsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DeveloperInfoCommand extends Command
{
    use GetClassMethodsTrait;

    public $model;
    protected static $defaultName = 'user:developer';

    function __construct(string $name = null)
    {
        $this->model = new Developer();
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Info about Developer Skills.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Developer can:');

        foreach ($this->getModelInfo() as $method) {
            $output->writeln("- {$method}");
        }

        return 0;
    }
}
