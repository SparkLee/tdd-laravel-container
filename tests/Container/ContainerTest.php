<?php

namespace SparkLee\Tests\Container;

use SparkLee\Container\Container;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testMake()
    {
        $container = new Container();
        self::assertInstanceOf(
            ContainerConcreteStub::class,
            $container->make(ContainerConcreteStub::class)
        );
    }
}

class ContainerConcreteStub
{

}
