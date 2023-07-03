<?php

class PremiumUser extends User {

    private $price;
    private Membership $membership;

    public function __construct(
            $username, $password, $email, $verifiedMail,
            $price, Membership $membership
        ) {

        parent :: __construct($username, $password, $email, $verifiedMail);
        
        $this -> setPrice($price);
        $this -> setMembership($membership);
    }

    public function getPrice() {

        return $this -> price;
    }
    public function setPrice($price) {

        if ($price <= 0) {

            throw new Exception("PRICE has to be greater then 0");
        }

        $this -> price = $price;
    }

    public function getMembership() {

        return $this -> membership;
    }
    public function setMembership($membership) {

        $this -> membership = $membership;
    }

    public function getActualPrice() {

        return $this -> getPrice() - (
            $this -> getPrice() * $this -> getMembership() -> getDiscount() / 100
        );
    }
}