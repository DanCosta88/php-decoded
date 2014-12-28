<?php

namespace DesignPattern\Creational\Singleton\Tests;

use DesignPattern\Creational\Singleton\Singleton as Singleton;

/**
 * Unit Testing for Singleton Pattern
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{

    public function testGetInstanceMethod()
    {
        $firstInstance = Singleton::getInstance();
        $this->assertInstanceOf('DesignPattern\Creational\Singleton\Singleton', $firstInstance);
    }

    public function testUniquenessOfInstance()
    {
        $firstInstance = Singleton::getInstance();
        $this->assertInstanceOf('DesignPattern\Creational\Singleton\Singleton', $firstInstance);
        $secondInstance = Singleton::getInstance();
        $this->assertSame($firstInstance, $secondInstance);
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();
        $reflectionObject = new \ReflectionObject($obj);
        $method = $reflectionObject->getMethod('__construct');
        $this->assertTrue($method->isPrivate());
    }

    public function testNoClonation()
    {
        $obj = Singleton::getInstance();
        $reflectionObject = new \ReflectionObject($obj);
        $method = $reflectionObject->getMethod('__clone');
        $this->assertTrue($method->isPrivate());
    }

}