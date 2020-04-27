<?php

use PHPUnit\Framework\TestCase;

require 'Admin.php';

class AdminTest extends TestCase
{
    //**** Id Unittest with Regular expression***/
    //Check digits because Id consist of only Digits 
    public function testThatWeCanGetTheUserId()
    {
        $ads = new Admin;
        
        $ads->setUserId('A237893');
        
        
        //$this->assertEquals($ads->getUserID(), 'A237893');
        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]{7}$/', $ads->getUserId() ), $ads->getUserId() . ' is not available' );


    }

    //**** User_name Unittest with Regular expression***/
    //Check String(Lowercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheUserName()
    {
        $ads = new Admin;
        
        $ads->setUserName('admin1234');

        $this->assertEquals(1 , preg_match( '/^[a-z0-9]{5,50}$/', $ads->getUserName() ), $ads->getUserName() . ' is not available' );


    }

    

    //**** Login Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheLogin()
    {
        $ads = new Admin;
        
        $ads->setLogin('steven');

        $this->assertEquals(1 , preg_match( '/^[a-z0-9]{5,50}$/', $ads->getLogin() ), $ads->getLogin() . ' is not available' );

    }

    //**** Login Unittest with Regular expression***/
    //Check String(Lowercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheRole()
    {
        $ads = new Admin;
        
        $ads->setRole('admin');

        $this->assertEquals(1 , preg_match( '/^[a-z]{4,50}$/', $ads->getRole() ), $ads->getRole() . ' is not avavaile' );

    }

    //**** Login Unittest with Regular expression***/
    //Check String(Lowercase, Uppercase) and Digits because Ac_Id consist of String & Digits  
    public function testThatWeCanGetTheAvatar()
    {
        $ads = new Admin;
        
        $ads->setAvatar('admin');

        $this->assertEquals(1 , preg_match( '/^[a-zA-Z0-9]/', $ads->getAvatar() ), $ads->getAvatar() . ' is not avavaile' );

    }

    //**** RegDate Unittest with Regular expression ***/
    //Check datetime type because RegDate is Datetime
    public function testThatWeCanGetTheRegDate()
    {
        $ads = new Admin;
        
        $ads->setRegDate('2020-04-01 17:35');
        
        //yyyy-mm-dd HH:MM
        $this->assertEquals(1 , preg_match( '/^(19|20)\d{2}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[0-1]) (0[0-9]|1[0-9]|2[0-3]):([0-5][0-9])$/', $ads->getRegDate() ), $ads->getRegDate() . ' is not a set of date' );
        
        

    }

    //**** Verified Unittest with Regular expression ***/
    //Check String(Uppercase)  because Fixed consist of String
    public function testThatWeCanGetTheVerified()
    {
        $ads = new Admin;
        
        $ads->setVerified('YES');

        $this->assertEquals(1 , preg_match( '/^[A-Z]+$/', $ads->getVerified() ), $ads->getVerified() . ' is not Capital Letter' );


    }

   
    



        

    
}

?>