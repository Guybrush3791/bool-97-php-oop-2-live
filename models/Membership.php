<?php

class Membership {

    private $name;
    private $discount;

    public function __construct($name, $discount) {

        $this -> setName($name);
        $this -> setDiscount($discount);
    }

    public function getName() {

        return $this -> name;
    }
    public function setName($name) {

        $this -> name = $name;
    }

    public function getDiscount() {

        return $this -> discount;
    }
    public function setDiscount($discount) {

        if ($discount <= 0) {

            throw new Exception("DISCOUNT has to be greater then 0");
        }

        $this -> discount = $discount;
    }
}