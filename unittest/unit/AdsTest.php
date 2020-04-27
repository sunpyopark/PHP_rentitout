<?php

use PHPUnit\Framework\TestCase;

require 'Ads.php';

class AdsTest extends TestCase
{
    //**** Enc_Id Unittest with Regular expression***/
    //Check digits because Enc_Id consist of only Digits 
    public function testThatWeCanGetTheEncId()
    {
        $ads = new Ads;
        
        $ads->setEncId('1');
        
        
        //$this->assertEquals($ads->getEncId(), '12');
        $this->assertEquals(1 , preg_match( '/^[0-9]+$/', $ads->getEncId() ), $ads->getEncId() . ' is not a set of digits' );


    }

    //**** Ad_Id Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheAdId()
    {
        $ads = new Ads;
        
        $ads->setAdId('AD20077942');

        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{10}$/', $ads->getAdId() ), $ads->getAdId() . ' is not a set of String and digits' );


    }

    //**** Author Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase) and digits, Length limit because Enc_Id consist of String and Digits
    public function testThatWeCanGetTheAuthor()
    {
        $ads = new Ads;
        
        $ads->setAuthor('M417357');

        //$this->assertEquals($ads->getAuthor(), 'M417352');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{7}$/', $ads->getAuthor() ), $ads->getAuthor() . ' is not seven characters' );


    }

    //**** Title Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase), Length limit because Title consist of only String
    public function testThatWeCanGetTheTitle()
    {
        $ads = new Ads;
        
        $ads->setTitle('Earphone');

        //$this->assertEquals($ads->getTitle(), 'Earphone');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{5,50}$/', $ads->getTitle() ), $ads->getTitle() . ' is not available' );


    }

    //**** Category Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase), Length limit because Category consist of String
    public function testThatWeCanGetTheCategory()
    {
        $ads = new Ads;
        
        $ads->setCategory('Electronics');

        $this->assertEquals($ads->getCategory(), 'Electronics');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]{5,50}$/', $ads->getCategory() ), $ads->getCategory() . ' is not a set of string' );
        //$this->assertEquals(1 , preg_match( '/^[a-zA-Z]\s+|\s+$/', $ads->getCategory() ), $ads->getCategory() . ' is not a set of string' );


    }

    //**** City Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase) because City consist of String
    public function testThatWeCanGetTheCity()
    {
        $ads = new Ads;
        
        $ads->setCity('Kitchener');

        $this->assertEquals($ads->getCity(), 'Kitchener');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]+$/', $ads->getCity() ), $ads->getCity() . ' is not a set of string' );
        


    }

    //**** Ad_condition Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase) because Ad_condition consist of String
    public function testThatWeCanGetTheAdCondition()
    {
        $ads = new Ads;
        
        $ads->setAdCondition('Used');

        $this->assertEquals($ads->getAdCondition(), 'Used');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]+$/', $ads->getAdCondition() ), $ads->getAdCondition() . ' is not a set of string' );


    }

    //**** Price Unittest with Regular expression ***/
    //Check Digits because Price consist of only Digits
    public function testThatWeCanGetThePrice()
    {
        $ads = new Ads;
        
        $ads->setPrice('200');
        
        
        $this->assertEquals($ads->getPrice(), '200');
        $this->assertEquals(1 , preg_match( '/^[0-9]+$/', $ads->getPrice() ), $ads->getPrice() . ' is not a set of digits' );


    }

    //**** Fixed Unittest with Regular expression ***/
    //Check String(Uppercase)  because Fixed consist of String
    public function testThatWeCanGetTheFixed()
    {
        $ads = new Ads;
        
        $ads->setFixed('YES');

        $this->assertEquals($ads->getFixed(), 'YES');
        $this->assertEquals(1 , preg_match( '/^[A-Z]+$/', $ads->getFixed() ), $ads->getFixed() . ' is not a set of string' );


    }

    //**** Brand Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase), Length limit because Brand consist of String
    public function testThatWeCanGetTheBrand()
    {
        $ads = new Ads;
        
        $ads->setBrand('Apple');

        $this->assertEquals($ads->getBrand(), 'Apple');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{5,30}$/', $ads->getBrand() ), $ads->getBrand() . ' is not a set of string' );


    }

    //**** Short_Desc Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase), digits, Special Characters, Length limit because Short_Desc consist of String, digits, Special Characters
    public function testThatWeCanGetTheShortDesc()
    {
        $ads = new Ads;
        
        $ads->setShortDesc('short_desc');

        $this->assertEquals($ads->getShortDesc(), 'short_desc');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9~!@#$%^&*()_+|<>?:{}]{5,400}$/', $ads->getShortDesc() ), $ads->getShortDesc() . ' is not a set of string' );


    }

    //**** Date_Posted Unittest with Regular expression ***/
    //Check datetime type because Short_Desc is Datetime
    public function testThatWeCanGetTheDatePosted()
    {
        $ads = new Ads;
        
        $ads->setDatePosted('2020-04-01 17:35');
        
        //yyyy-mm-dd HH:MM
        $this->assertEquals(1 , preg_match( '/^(19|20)\d{2}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[0-1]) (0[0-9]|1[0-9]|2[0-3]):([0-5][0-9])$/', $ads->getDatePosted() ), $ads->getDatePosted() . ' is not a set of date' );
        
        //yyyy-mm-dd
        //$this->assertEquals(1 , preg_match( '/^(19|20)\d{2}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[0-1])$/', $ads->getDatePosted() ), $ads->getDatePosted() . ' is not a set of date' );
     
        //Time Zone Check
        $a = new \DateTime('@309943777', new \DateTimeZone('America/Toronto'));
        $b = new \DateTime('@309943777', new \DateTimeZone('America/Toronto'));
        $this->assertEquals($a, $b, 0.0);

        


    }

    //**** Status Unittest with Regular expression ***/
    //Check String(Lowercase, Uppercase), Length limit because Status is String
    public function testThatWeCanGetTheStatus()
    {
        $ads = new Ads;
        
        $ads->setStatus('Active');

        $this->assertEquals($ads->getStatus(), 'Active');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z]{5,10}$/', $ads->getStatus() ), $ads->getStatus() . ' is not a set of string' );


    }

    //**** Featured Unittest with Regular expression ***/
    //String check because Featured is String
    public function testThatWeCanGetTheFeatured()
    {
        $ads = new Ads;
        
        $ads->setFeatured('BLOB_2B');

        $this->assertEquals($ads->getFeatured(), 'BLOB_2B');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9~!@#$%^&*()_+|<>?:{}]{5,400}$/', $ads->getFeatured() ), $ads->getFeatured() . ' is not a set of string and digits' );


    }
    
      

    
}

?>