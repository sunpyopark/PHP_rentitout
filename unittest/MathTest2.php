<?php
require 'Math.php';

use PHPUnit\Framework\TestCase;
//use PHPUNIT_Framework_TestCase as TestCase;
// sometimes it can be
// use PHPUnit\Framework\TestCase as TestCase;

class MathTest extends TestCase {
    /**
     * test with data from dataProvider
     * @dataProvider providerFibonacci
     */
    public function testFibonacciWithDataProvider($n, $result) {
        $math = new Math();
        $this->assertEquals($result, $math->fibonacci($n));
    }

    public function providerFibonacci() {
        return array(
            array(1, 1),
            array(2, 1),
            array(3, 2),
            array(4, 3),
            array(5, 5),
            array(6, 8),
        );
    }
}
?>