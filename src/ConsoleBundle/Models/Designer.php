<?php


namespace App\ConsoleBundle\Models;

use App\ConsoleBundle\Interfaces\{CommunicateWithManagerInterface, DrawImageInterface};


class Designer extends Worker implements CommunicateWithManagerInterface, DrawImageInterface
{
    public function communicateWithManager()
    {
        // TODO: Implement communicateWithManager() method.
    }

    public function drawImage()
    {
        // TODO: Implement drawImage() method.
    }
}
