<?php

use PHPUnit\Framework\TestCase;

class EqualsTest extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        //$user = new \App\Models\User;
        
        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(), 'Billy');
    }
    
    public function testThatWeCanGetTheLastName()
    {
    //$user = new \App\Models\User;

    $user->setLastNam('Billy');

    $this->assertEquals($user->getFirsName(), 'Billy');
    
    }
}
?>