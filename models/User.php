<?php

class User {

    private $username;
    private $password;
    private $email;
    private $verifiedMail;

    public function __construct($username, $password, $email, $verifiedMail) {

        $this -> setUsername($username);
        $this -> setPassword($password);
        $this -> setEmail($email);
        $this -> setVerifiedMail($verifiedMail);
    }

    public function getUsername() {

        return $this -> username;
    }
    public function setUsername($username) {

        $this -> username = $username;
    }

    public function getPassword() {

        return $this -> password;
    }
    public function setPassword($password) {

        $this -> password = $password;
    }

    public function getEmail() {

        return $this -> email;
    }
    public function setEmail($email) {

        $this -> email = $email;
    }

    public function getVerifiedMail() {

        return $this -> verifiedMail;
    }
    public function setVerifiedMail($verifiedMail) {

        $this -> verifiedMail = $verifiedMail;
    }
}