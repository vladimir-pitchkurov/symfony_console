<?php


namespace App\ConsoleBundle\Commands;

use App\ConsoleBundle\Models\QA;
use App\ConsoleBundle\Traits\GetClassMethodsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class QAInfoCommand extends Command
{
    use GetClassMethodsTrait;

    public $model;
    protected static $defaultName = 'user:qa';

    function __construct(string $name = null)
    {
        $this->model = new QA();
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Info about QA Skills.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('QA can:');

        foreach ($this->getModelInfo() as $method) {
            $output->writeln("- {$method}");
        }

        return 0;
    }
}
