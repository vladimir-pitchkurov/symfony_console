<?php


namespace App\ConsoleBundle\Commands;

use App\ConsoleBundle\Models\QA;
use App\ConsoleBundle\Traits\GetClassMethodsTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class QACheckSkillCommand extends Command
{
    use GetClassMethodsTrait;

    public $model;
    protected static $defaultName = 'can:qa';

    function __construct(string $name = null)
    {
        $this->model = new QA();
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setDescription('Check QA Skills By methodName.')
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
