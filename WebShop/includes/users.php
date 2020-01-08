<?php
class users {
    private $username;
    private $email;
    private $password;
    static  $usersCount = 0;    // not used
    public $uid;                //nicht benutzt

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email    = $email;
        $this->password = $password;
        $this->uid      = self::$usersCount;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail() {
        return $this->email;
    }

}