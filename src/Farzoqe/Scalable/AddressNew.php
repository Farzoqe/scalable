<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Farzoqe\Scalable;

/**
 * Description of Address
 *
 * @author ZOQ
 */
class AddressNew {

    public $firstName;
    public $lastName;
    public $company;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zip;
    public $country;
    public $email;

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getCompany() {
        return $this->company;
    }

    public function getAddress1() {
        return $this->address1;
    }

    public function getAddress2() {
        return $this->address2;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }

    public function getZip() {
        return $this->zip;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function setCompany($company) {
        $this->company = $company;
        return $this;
    }

    public function setAddress1($address1) {
        $this->address1 = $address1;
        return $this;
    }

    public function setAddress2($address2) {
        $this->address2 = $address2;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    public function setZip($zip) {
        $this->zip = $zip;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

}
