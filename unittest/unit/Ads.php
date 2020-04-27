<?php

class Ads
{
    public $enc_id;     
    public $ad_id;
    public $author;
    public $title;
    public $category;
    public $city;
    public $ad_condition;
    public $price;
    public $fixed;
    public $brand;
    public $short_desc;
    public $date_posted;
    public $status;
    public $featured;


    //Enc_id
    public function setEncId($enc_id) { $this->enc_id = trim($enc_id); }
    public function getEncId() { return $this->enc_id; }

    //Ad_id
    public function setAdId($ad_id) { $this->ad_id = trim($ad_id); }
    public function getAdId() { return $this->ad_id; }

    //Author
    public function setAuthor($author) { $this->author = trim($author); }
    public function getAuthor() { return $this->author; }

    //Title
    public function setTitle($title) { $this->title = trim($title); }
    public function getTitle() { return $this->title; }

    //Category
    public function setCategory($category) { $this->category = trim($category); }
    public function getCategory() { return $this->category; }

    //City
    public function setCity($city) { $this->city = trim($city); }
    public function getCity() { return $this->city; }

    //Ad_condition
    public function setAdCondition($ad_condition) { $this->ad_condition = trim($ad_condition); }
    public function getAdCondition() { return $this->ad_condition; }

    //Price
    public function setPrice($price) { $this->price = trim($price); }
    public function getPrice() { return $this->price; }

    //Fixed
    public function setFixed($fixed) { $this->fixed = trim($fixed); }
    public function getFixed() { return $this->fixed; }

    //Brand
    public function setBrand($brand) { $this->brand = trim($brand); }
    public function getBrand() { return $this->brand; }

    //Short_desc
    public function setShortDesc($short_desc) { $this->short_desc = trim($short_desc); }
    public function getShortDesc() { return $this->short_desc; }

    //Date_posted
    public function setDatePosted($date_posted) { $this->date_posted = trim($date_posted); }
    public function getDatePosted() { return $this->date_posted; }

    //Status
    public function setStatus($status) { $this->status = trim($status); }
    public function getStatus() { return $this->status; }

    //Featured
    public function setFeatured($featured) { $this->featured = trim($featured); }
    public function getFeatured() { return $this->featured; }

 

    
    
}
?>