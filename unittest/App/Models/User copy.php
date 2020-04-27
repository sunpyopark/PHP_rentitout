<?php

use PHPUnit\Framework\TestCase;

require 'User.php';

class UserTest extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new User;
        
        $user->setFirstName('Steven');

        $this->assertEquals($user->getFirstName(), 'Steven');


    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new User;
        
        $user->setLastName('Park');

        $this->assertEquals($user->getLastName(), 'Park');


    }

    public function testFullNameIsRetruned()
    {
        $user = new User;
        $user->setFirstName('Steven');
        $user->setLastName('Park');

        $this->assertEquals($user->getFullName(), 'Steven Park');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new User;
        $user->setFirstName(' Steven   ');
        $user->setLastName('       Park');

        $this->assertEquals($user->getFirstName(), 'Steven');
        $this->assertEquals($user->getLastName(), 'Park');
    }

    public function testEailAddressCanBeSet()
    {
        $user = new User;
        $user->setEmail('Steven@gmail.com');

        $this->assertEquals($user->getEmail(), 'Steven@gmail.com');

    }    

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
}

?>