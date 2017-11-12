<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Farzqe\Scalable;

/**
 * Description of Design
 *
 * @author ZOQ
 */
class Design {

    public $location;
    public $thumb;
    public $sourceFile;
    public $art;
    public $alternateArt;

    public function getLocation() {
        return $this->location;
    }

    public function getThumb() {
        return $this->thumb;
    }

    public function getSourceFile() {
        return $this->sourceFile;
    }

    public function getArt() {
        return $this->art;
    }

    public function getAlternateArt() {
        return $this->alternateArt;
    }

    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    public function setThumb($thumb) {
        $this->thumb = $thumb;
        return $this;
    }

    public function setSourceFile($sourceFile) {
        $this->sourceFile = $sourceFile;
        return $this;
    }

    public function setArt($art) {
        $this->art = $art;
        return $this;
    }

    public function setAlternateArt($alternateArt) {
        $this->alternateArt = $alternateArt;
        return $this;
    }

}
