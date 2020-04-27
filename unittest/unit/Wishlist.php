<?php

class Wishlist
{
    public $ad_id;     
    public $title;
    public $category;
    public $price;
    public $city;
    public $brand;
    

    //ad_id
    public function setAdId($ad_id) { $this->ad_id = trim($ad_id); }
    public function getAdId() { return $this->ad_id; }

    //Title
    public function setTitle($title) { $this->title = trim($title); }
    public function getTitle() { return $this->title; }

    //Category
    public function setCategory($category) { $this->category = trim($category); }
    public function getCategory() { return $this->category; }

    //Price
    public function setPrice($price) { $this->price = trim($price); }
    public function getPrice() { return $this->price; }

    //City
    public function setCity($city) { $this->city = trim($city); }
    public function getCity() { return $this->city; }

    //Brand
    public function setBrand($brand) { $this->brand = trim($brand); }
    public function getBrand() { return $this->brand; }

    

    
}
?>