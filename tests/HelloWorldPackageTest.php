<?php
// File: hello-world-package/tests/HelloWorldPackageTest.php

use PHPUnit\Framework\TestCase;
use Ajeya\HelloWorldPackage\HelloWorldPackage;

class HelloWorldPackageTest extends TestCase
{
    public function testSayHello()
    {
        $helloWorld = new HelloWorldPackage();
        $this->assertEquals('Hello, World!', $helloWorld->sayHello());
    }
}
