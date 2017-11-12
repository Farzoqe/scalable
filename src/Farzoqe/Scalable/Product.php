<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Farzqe\Scalable;

/**
 * Description of Product
 *
 * @author ZOQ
 */
class Product {

    public $sku;
    public $description;
    public $color;
    public $quantity;
    public $size;
    public $price;
    public $weight;
    public $design;

    public function getSku() {
        return $this->sku;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getColor() {
        return $this->color;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getSize() {
        return $this->size;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getDesign() {
        return $this->design;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    public function setDesign(Design $design) {
        $this->design = $design;
        return $this;
    }

}
