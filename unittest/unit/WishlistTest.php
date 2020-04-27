<?php

use PHPUnit\Framework\TestCase;

require 'Wishlist.php';

class WishlistTest extends TestCase
{
    //**** Ad_Id Unittest with Regular expression***/
    //Check digits because Id consist of only Digits and String 
    public function testThatWeCanGetTheAdId()
    {
        $ads = new Wishlist;
        
        $ads->setAdId('A237893');
        
        
        $this->assertEquals($ads->getAdId(), 'A237893');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{7}$/', $ads->getAdId() ), $ads->getAdId() . ' is not a set of string and digits and String' );

    }

    //**** Title Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase), Length limit because Title consist of only String
    public function testThatWeCanGetTheTitle()
    {
        $ads = new Wishlist;
        
        $ads->setTitle('Earphone');

        $this->assertEquals($ads->getTitle(), 'Earphone');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{5,50}$/', $ads->getTitle() ), $ads->getTitle() . ' is not a set of string and digits' );


    }

    //**** Category Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase), Length limit because Category consist of String
    public function testThatWeCanGetTheCategory()
    {
        $ads = new Wishlist;
        
        $ads->setCategory('Electronics');

        $this->assertEquals($ads->getCategory(), 'Electronics');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]{5,50}$/', $ads->getCategory() ), $ads->getCategory() . ' is not a set of string' );
        //$this->assertEquals(1 , preg_match( '/^[a-zA-Z]\s+|\s+$/', $ads->getCategory() ), $ads->getCategory() . ' is not a set of string' );


    }

    //**** Price Unittest with Regular expression ***/
    //Check Digits because Price consist of only Digits
    public function testThatWeCanGetThePrice()
    {
        $ads = new Wishlist;
        
        $ads->setPrice('200');
        
        
        //$this->assertEquals($ads->getPrice(), '200');
        $this->assertEquals(1 , preg_match( '/^[0-9]+$/', $ads->getPrice() ), $ads->getPrice() . ' is not a set of digits' );


    }

    //**** City Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase) because City consist of String
    public function testThatWeCanGetTheCity()
    {
        $ads = new Wishlist;
        
        $ads->setCity('Kitchener');

        //$this->assertEquals($ads->getCity(), 'Kitchener');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]+$/', $ads->getCity() ), $ads->getCity() . ' is not a set of only string' );
        


    }

    //**** Brand Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase), Length limit because Brand consist of String
    public function testThatWeCanGetTheBrand()
    {
        $ads = new Wishlist;
        
        $ads->setBrand('Apple');

        $this->assertEquals($ads->getBrand(), 'Apple');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{5,30}$/', $ads->getBrand() ), $ads->getBrand() . ' is not available' );


    }

      
}

?>