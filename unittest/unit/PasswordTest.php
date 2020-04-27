<?php 

use PHPUnit\Framework\TestCase;
//require 'Password.php';

final class PasswordHashTest extends TestCase
{
    public function testFuncExists() {
        $this->assertTrue(function_exists('password_hash'));
    }

    public function testStringLength() {
        $this->assertEquals(60, strlen(password_hash('conestoga', PASSWORD_BCRYPT)));
    }

    public function testHash() {
        $hash = password_hash('conestoga', PASSWORD_BCRYPT);
        $this->assertEquals($hash, crypt('conestoga', $hash));
    }

    public function testKnownSalt() {
        $hash = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, array("cost" => 7, "salt" => "usesomesillystringforsalt"));
        $this->assertEquals('$2y$07$usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi', $hash);
    }

    public function testRawSalt() {
        $hash = password_hash("test", PASSWORD_BCRYPT, array("salt" => "123456789012345678901" . chr(0)));
        $this->assertEquals('$2y$10$MTIzNDU2Nzg5MDEyMzQ1Nej0NmcAWSLR.oP7XOR9HD/vjUuOj100y', $hash);
    }

    

 }