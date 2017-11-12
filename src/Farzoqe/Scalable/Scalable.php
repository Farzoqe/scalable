<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Farzqe\Scalable;

/**
 * Description of Scalable
 *
 * @author ZOQ
 */
class Scalable {

    public $order;
    private $key;
    private $secret;

    public function __construct() {
        $this->key = Config::$key;
        $this->secret = Config::$secret;
    }

    public function getOrder() {
        return $this->order;
    }

    public function setOrder(Order $order) {
        $this->order = $order;
        return $this;
    }

    function getXml() {
        /* @var $order Order */
        $order = $this->order;
        $writer = new \XMLWriter();
        $writer->openMemory();
        $writer->startElement('AddXml');
        $writer->writeAttribute('xmlns', '"http://tempuri.org/');
        $writer->startElement('OrderString');
        $writer->startElement('Request');
        $writer->writeElement('CustID', $order->getCustID());
        $writer->writeElement('PO', $order->getPo());
        $writer->writeElement('Source', $order->getSource());
        $writer->writeElement('Store', $order->getStore());
        $writer->writeElement('StoreID', $order->getStoreId());
        $writer->startElement('ShipTo');
        /* @var $address Address */
        $address = $order->getShipTo();
        $writer->writeElement('FirstName', $address->getFirstName());
        $writer->writeElement('LastName', $address->getLastName());
        $writer->writeElement('Company', $address->getCompany());
        $writer->writeElement('Adrx1', $address->getAddress1());
        $writer->writeElement('Adrx2', $address->getAddress2());
        $writer->writeElement('City', $address->getCity());
        $writer->writeElement('State', $address->getState());
        $writer->writeElement('Zip', $address->getZip());
        $writer->writeElement('Country', $address->getCountry());
        $writer->writeElement('Email', $address->getEmail());
        $writer->endElement();
        $writer->writeElement('ShipMethod', $order->getShipMethod());
        $writer->writeElement('ProductionPriority', $order->getProductionPriority());
        $writer->writeElement('OrderNotes', '');
        foreach ($order->getItems() as $item) {
            /* @var $item Product */
            $writer->startElement('Item');
            $writer->writeElement('SKU', $item->getSku());
            $writer->writeElement('Descrip', $item->getDescription());
            $writer->writeElement('Color', $item->getColor());
            $writer->writeElement('Quantity', $item->getQuantity());
            $writer->writeElement('Size', $item->getSize());
            $writer->startElement('Design');
            /* @var $design Design */
            $design = $item->getDesign();
            $writer->writeElement('Location', $design->getLocation());
            $writer->writeElement('Thumb', $design->getThumb());
            $writer->startElement('Options');
            $writer->writeElement('name', 'SourceFile');
            $writer->writeElement('value', $design->getSourceFile());
            $writer->endElement();
            $writer->endElement();
        }
        $writer->endElement();
        $writer->endElement();
        $writer->endElement();
        return $data = $writer->outputMemory();
    }

}
