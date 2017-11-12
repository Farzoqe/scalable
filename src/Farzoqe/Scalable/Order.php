<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Farzqe\Scalable;

/**
 * Description of Order
 *
 * @author ZOQ
 */
class Order {

    public $custID;
    public $po;
    public $source;
    public $store;
    public $storeId;
    public $shipTo;
    public $shipMethod;
    public $productionPriority;
    public $items;

    public function getCustID() {
        return $this->custID;
    }

    public function getPo() {
        return $this->po;
    }

    public function getSource() {
        return $this->source;
    }

    public function getStore() {
        return $this->store;
    }

    public function getStoreId() {
        return $this->storeId;
    }

    public function getShipTo() {
        return $this->shipTo;
    }

    public function getShipMethod() {
        return $this->shipMethod;
    }

    public function getProductionPriority() {
        return $this->productionPriority;
    }

    public function getItems() {
        return $this->items;
    }

    public function setCustID($custID) {
        $this->custID = $custID;
        return $this;
    }

    public function setPo($po) {
        $this->po = $po;
        return $this;
    }

    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    public function setStore($store) {
        $this->store = $store;
        return $this;
    }

    public function setStoreId($storeId) {
        $this->storeId = $storeId;
        return $this;
    }

    public function setShipTo(Address $shipTo) {
        $this->shipTo = $shipTo;
        return $this;
    }

    public function setShipMethod($shipMethod) {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    public function setProductionPriority($productionPriority) {
        $this->productionPriority = $productionPriority;
        return $this;
    }

    public function setItems(array $items) {
        $this->items = $items;
        return $this;
    }

}
