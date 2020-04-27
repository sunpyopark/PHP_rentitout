<?php

use PHPUnit\Framework\TestCase;

require 'Alerts.php';

class AlertsTest extends TestCase
{
    //**** Id Unittest with Regular expression***/
    //Check digits because Id consist of only Digits 
    public function testThatWeCanGetTheId()
    {
        $ads = new Alerts;
        
        $ads->setId('1');
        
        $this->assertEquals(1 , preg_match( '/^[0-9]+$/', $ads->getId() ), $ads->getId() . ' is not a set of digits' );


    }

    //**** Code Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheUserName()
    {
        $ads = new Alerts;
        
        $ads->setCode('001');

        $this->assertEquals(1 , preg_match( '/^[0-9]{3}$/', $ads->getCode() ), $ads->getCode() . ' is not available' );


    }

    //**** Desc Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase), digits, Special Characters, Length limit because Short_Desc consist of String, digits, Special Characters
    public function testThatWeCanGetTheDescription()
    {
        $ads = new Alerts;
        
        $ads->setDescription('Account');

        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9~!@#$%^&*()_+|<>?:{}]{5,400}$/', $ads->getDescription() ), $ads->getDescription() . ' is not available' );


    }

    //**** Type Unittest with Regular expression***/
    //Check String(Lowercase) and Digits because Type consist of String & Digits  
    public function testThatWeCanGetTheType()
    {
        $ads = new Alerts;
        
        $ads->setType('success');

        $this->assertEquals(1 , preg_match( '/^[a-z]{5,10}$/', $ads->getType() ), $ads->getType() . ' is not available' );
        

    }

           
}

?>