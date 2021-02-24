<?php

namespace SparkLee\Container;

use ReflectionClass;
use ReflectionException;

class Container
{
    /**
     * @param $abstract
     *
     * @return object
     *
     * @throws ReflectionException
     */
    public function make($abstract)
    {
        $reflector = new ReflectionClass($abstract);
        return $reflector->newInstance();
    }
}