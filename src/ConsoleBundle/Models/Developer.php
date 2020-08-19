<?php


namespace App\ConsoleBundle\Models;

use \App\ConsoleBundle\Interfaces\{WriteCodeInterface, TestCodeInterface, CommunicateWithManagerInterface};


class Developer extends Worker implements WriteCodeInterface, TestCodeInterface, CommunicateWithManagerInterface
{
    public function writeCode()
    {
        // TODO: Implement writeCode() method.
    }

    public function communicateWithManager()
    {
        // TODO: Implement communicateWithManager() method.
    }

    public function testCode()
    {
        // TODO: Implement testCode() method.
    }
}
