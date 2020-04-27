<?php

use PHPUnit\Framework\TestCase;

require 'Cities.php';

class CitiesTest extends TestCase
{
    //**** Id Unittest with Regular expression***/
    //Check digits because Id consist of only Digits 
    public function testThatWeCanGetTheId()
    {
        $ads = new Cities;
        
        $ads->setId('1');
        
        
        //$this->assertEquals($ads->getId(), '1');
        $this->assertEquals(1 , preg_match( '/^[0-9]+$/', $ads->getId() ), $ads->getId() . ' is not a set of digits' );


    }

    //**** Cities Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheCategories()
    {
        $ads = new Cities;
        
        $ads->setCities('Waterloo');

        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]{3,30}$/', $ads->getCities() ), $ads->getCities() . ' is less 3 or more 31' );


    }

        

    
}

?>