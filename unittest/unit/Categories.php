<?php

class Categories
{
    public $id;     
    public $categories;
    

    //id
    public function setId($id) { $this->id = trim($id); }
    public function getId() { return $this->id; }

    //Categories
    public function setCategories($categories) { $this->categories = trim($categories); }
    public function getCategories() { return $this->categories; }

    
}
?>