<?php


namespace App\ConsoleBundle\Models;

use App\ConsoleBundle\Interfaces\{TestCodeInterface, CommunicateWithManagerInterface, CreateTaskInterface};


class QA extends Worker implements TestCodeInterface, CommunicateWithManagerInterface, CreateTaskInterface
{

    public function communicateWithManager()
    {
        // TODO: Implement communicateWithManager() method.
    }

    public function createTask()
    {
        // TODO: Implement createTask() method.
    }

    public function testCode()
    {
        // TODO: Implement testCode() method.
    }
}
