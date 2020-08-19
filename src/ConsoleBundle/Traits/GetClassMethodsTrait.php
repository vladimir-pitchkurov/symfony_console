<?php


namespace App\ConsoleBundle\Traits;


trait GetClassMethodsTrait
{
    public function getModelInfo()
    {
        return get_class_methods($this->model);
    }
}
