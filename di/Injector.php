<?php


namespace di;


class Injector
{
    public function resolveDependencies($className)
    {
        if (!class_exists($className)) {
            throw new \Exception('Class not found');
        }

        $reflectionClass = new \ReflectionClass($className);
        $constructor = $reflectionClass->getConstructor();

        $arguments = [];

        if ($constructor) {
            foreach ($constructor->getParameters() as $param) {
                $type = $param->getType()->getName();
                $name = $param->getName();
                $instance = $this->resolveDependencies($type);
                $arguments[$name] = $instance;
            }
        }

        return $reflectionClass->newInstanceArgs($arguments);
    }
}