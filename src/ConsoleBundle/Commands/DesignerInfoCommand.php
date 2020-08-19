<?php


namespace App\ConsoleBundle\Commands;

use App\ConsoleBundle\Models\Designer;
use App\ConsoleBundle\Traits\GetClassMethodsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DesignerInfoCommand extends Command
{
    use GetClassMethodsTrait;

    public $model;
    protected static $defaultName = 'user:designer';

    function __construct(string $name = null)
    {
        $this->model = new Designer();
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Info about Designer Skills.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Designer can:');

        foreach ($this->getModelInfo() as $method) {
            $output->writeln("- {$method}");
        }

        return 0;
    }
}
