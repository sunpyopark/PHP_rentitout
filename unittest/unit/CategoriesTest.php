<?php

use PHPUnit\Framework\TestCase;

require 'Categories.php';

class CategoriesTest extends TestCase
{
    //**** Id Unittest with Regular expression***/
    //Check digits because Id consist of only Digits 
    public function testThatWeCanGetTheId()
    {
        $ads = new Categories;
        
        $ads->setId('1');
        
        
        //$this->assertEquals($ads->getId(), '1');
        $this->assertEquals(1 , preg_match( '/^[0-9]+$/', $ads->getId() ), $ads->getId() . ' is not a set of digits' );


    }

    //**** Categories Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheCategories()
    {
        $ads = new Categories;
        
        $ads->setCategories('Mobiles');

        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]{5,30}$/', $ads->getCategories() ), $ads->getCategories() . ' is not available' );


    }

        

    
}

?>