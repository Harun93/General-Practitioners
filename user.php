<?php
//user class to represent a site user.
Class User{

    //class variables
    public $userid;
    public $firstName;
    public $lastName;
    public $username;
    public $password;
    public $addressline1;
    public $addressline2;
    public $addressline3;
    public $postcode;
    public $phone;
    public $role;

    //constructor to construct the variables.
    function __construct($userid,$firstName,$lastName,$username,$password,$addressline1,$addressline2,$postcode,$phone,$role){
        $this->userid = $userid;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->password = $password;
        $this->addressline1 = $addressline1;
        $this->addressline2 = $addressline2;
        $this->postcode = $postcode;
        $this->phone = $phone;
        $this->role = $role;
    }



}
?>