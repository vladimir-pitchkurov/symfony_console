<?php


namespace App\ConsoleBundle\Commands;

use App\ConsoleBundle\Models\Designer;
use App\ConsoleBundle\Traits\GetClassMethodsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DesignerCheckSkillCommand extends Command
{
    use GetClassMethodsTrait;

    public $model;
    protected static $defaultName = 'can:designer';

    function __construct(string $name = null)
    {
        $this->model = new Designer();
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Check Designer Skills By methodName.')
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
