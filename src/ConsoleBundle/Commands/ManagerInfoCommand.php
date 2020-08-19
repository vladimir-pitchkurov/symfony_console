<?php


namespace App\ConsoleBundle\Commands;

use App\ConsoleBundle\Models\Manager;
use App\ConsoleBundle\Traits\GetClassMethodsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ManagerInfoCommand extends Command
{
    use GetClassMethodsTrait;

    public $model;
    protected static $defaultName = 'user:manager';

    function __construct(string $name = null)
    {
        $this->model = new Manager();
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Info about Manager Skills.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Manager can:');

        foreach ($this->getModelInfo() as $method) {
            $output->writeln("- {$method}");
        }

        return 0;
    }
}
