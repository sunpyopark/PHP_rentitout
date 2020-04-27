<?php

class Cities
{
    public $id;     
    public $cities;
    

    //id
    public function setId($id) { $this->id = trim($id); }
    public function getId() { return $this->id; }

    //Cities
    public function setCities($cities) { $this->cities = trim($cities); }
    public function getCities() { return $this->cities; }

    
}
?>