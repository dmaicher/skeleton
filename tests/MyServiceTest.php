<?php

namespace App\Tests;

use App\Services\MyService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MyServiceTest extends KernelTestCase
{
    public function testMyServiceDoesSomething()
    {
        $kernel = static::bootKernel();
        $this->assertSame(
            $kernel->getContainer()->get(MyService::class)->doSomething(),
            $kernel->getContainer()->get(MyService::class)->doSomething()
        );
    }
}
