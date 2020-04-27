<?php

class Alerts
{
    public $id;     
    public $code;
    public $description;
    public $type;
    

    //id
    public function setId($id) { $this->id = trim($id); }
    public function getID() { return $this->id; }

    //code
    public function setCode($code) { $this->code = trim($code); }
    public function getCode() { return $this->code; }

    //Description
    public function setDescription($description) { $this->description = trim($description); }
    public function getDescription() { return $this->description; }

    //Type
    public function setType($type) { $this->type = trim($type); }
    public function getType() { return $this->type; }

        
}
?>