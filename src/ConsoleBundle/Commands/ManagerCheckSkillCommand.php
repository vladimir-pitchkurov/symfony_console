<?php


namespace App\ConsoleBundle\Commands;

use App\ConsoleBundle\Models\Manager;
use App\ConsoleBundle\Traits\GetClassMethodsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ManagerCheckSkillCommand extends Command
{
    use GetClassMethodsTrait;

    public $model;
    protected static $defaultName = 'can:manager';

    function __construct(string $name = null)
    {
        $this->model = new Manager();
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Check Manager Skills By methodName.')
            ->addArgument('skill');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $methods = $this->getModelInfo();
        $skill = $input->getArgument('skill');

        $output->writeln(in_array($skill, $methods) ? 'TRUE' : 'FALSE');

        return 0;
    }
}
