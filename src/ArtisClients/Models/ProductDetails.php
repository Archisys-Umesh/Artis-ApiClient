<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of ProductDetails
 *
 * @author Uday
 */
class ProductDetails {
    
    private $productId;
    private $language;
    private $name;
    private $summary;
    private $description;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getProductId() {
        return $this->productId;
    }

    function getLanguage() {
        return $this->language;
    }

    function getName() {
        return $this->name;
    }

    function getSummary() {
        return $this->summary;
    }

    function getDescription() {
        return $this->description;
    }

    function getUpdatedBy() {
        return $this->updatedBy;
    }

    function getCreatedBy() {
        return $this->createdBy;
    }

    function getCreatedOn() {
        return $this->createdOn;
    }

    function getUpdatedOn() {
        return $this->updatedOn;
    }

    function setProductId($productId): void {
        $this->productId = $productId;
    }

    function setLanguage($language): void {
        $this->language = $language;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setSummary($summary): void {
        $this->summary = $summary;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setUpdatedBy($updatedBy): void {
        $this->updatedBy = $updatedBy;
    }

    function setCreatedBy($createdBy): void {
        $this->createdBy = $createdBy;
    }

    function setCreatedOn($createdOn): void {
        $this->createdOn = $createdOn;
    }

    function setUpdatedOn($updatedOn): void {
        $this->updatedOn = $updatedOn;
    }


}
