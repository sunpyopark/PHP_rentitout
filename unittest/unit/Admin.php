<?php

class Admin
{
    public $user_id;     
    public $user_name;
    public $email;
    public $login;
    public $role;
    public $avatar;
    public $reg_date;
    public $verified;
    

    //User_id
    public function setUserId($user_id) { $this->user_id = trim($user_id); }
    public function getUserID() { return $this->user_id; }

    //User_name
    public function setUserName($user_name) { $this->user_name = trim($user_name); }
    public function getUserName() { return $this->user_name; }

    //Email
    public function setEmail($email) { $this->email = trim($email); }
    public function getEmail() { return $this->email; }

    //Login
    public function setLogin($login) { $this->login = trim($login); }
    public function getLogin() { return $this->login; }

    //role
    public function setRole($role) { $this->role = trim($role); }
    public function getRole() { return $this->role; }

    //Avatar
    public function setAvatar($avatar) { $this->avatar = trim($avatar); }
    public function getAvatar() { return $this->avatar; }

    //reg_date
    public function setRegDate($reg_date) { $this->reg_date = trim($reg_date); }
    public function getRegDate() { return $this->reg_date; }

    //verified
    public function setVerified($verified) { $this->verified = trim($verified); }
    public function getVerified() { return $this->verified; }

    
}
?>