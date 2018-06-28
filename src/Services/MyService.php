<?php

namespace App\Services;

class MyService
{
    public function doSomething()
    {
        return spl_object_hash($this);
    }
}
