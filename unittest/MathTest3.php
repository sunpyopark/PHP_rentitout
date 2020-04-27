<?php
require 'Math.php';

use PHPUnit\Framework\TestCase;
//use PHPUNIT_Framework_TestCase as TestCase;
// sometimes it can be
// use PHPUnit\Framework\TestCase as TestCase;

class MathTest extends TestCase {
    public function testExceptionsForNegativeNumbers() {
        $this->expectException(InvalidArgumentException::class);
        $math = new Math();
            $math->fibonacci(-1);
    }

    public function testFailedForZero() {
        $this->expectException(InvalidArgumentException::class);
        $math = new Math();
        $math->factorial(0);
    }
}
?>