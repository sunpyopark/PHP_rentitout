<?php

use PHPUnit\Framework\TestCase;

require 'User.php';

class UserTest extends TestCase
{
    //**** First Name Test ***/
    public function testThatWeCanGetTheFirstName()
    {
        $user = new User;
        
        $user->setFirstName('Steven');

        $this->assertEquals($user->getFirstName(), 'Steven');


    }

    //**** Last Name Test ***/
    public function testThatWeCanGetTheLastName()
    {
        $user = new User;
        
        $user->setLastName('Park');

        $this->assertEquals($user->getLastName(), 'Park');


    }
    
    //**** Full Name Test ***/
    public function testFullNameIsRetruned()
    {
        $user = new User;
        $user->setFirstName('Steven');
        $user->setLastName('Park');

        $this->assertEquals($user->getFullName(), 'Steven Park');
    }

    //**** Full Name Trime Test ***/
    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new User;
        $user->setFirstName(' Steven   ');
        $user->setLastName('       Park');

        $this->assertEquals($user->getFirstName(), 'Steven');
        $this->assertEquals($user->getLastName(), 'Park');
    }

    //**** Email Test ***/
    public function testEailAddressCanBeSet()
    {
        $user = new User;
        $user->setEmail('Steven@gmail.com');

        $this->assertEquals($user->getEmail(), 'Steven@gmail.com');

    }    

    //**** Email Variables Test ***/
    public function testEmailVariablesContainCorrectValues()
    {
        $user = new User;
        $user->setFirstName('Steven');
        $user->setLastName('Park');
        $user->setEmail('Steven@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Steven Park');
        $this->assertEquals($emailVariables['email'], 'Steven@gmail.com');

    }
    //**** Password Hash Test ***/
    public function testFuncExists() {
        $this->assertTrue(function_exists('password_hash'));
    }

    public function testStringLength() {
        $this->assertEquals(60, strlen(password_hash('foo', PASSWORD_BCRYPT)));
    }

    public function testHash() {
        $hash = password_hash('foo', PASSWORD_BCRYPT);
        $this->assertEquals($hash, crypt('foo', $hash));
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

?>