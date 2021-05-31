<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of ProductExtraFields
 *
 * @author Uday
 */
class ProductExtraFields {
    
    private $id;
    private $productId;
    private $language;
    private $key;
    private $value;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getId() {
        return $this->id;
    }

    function getProductId() {
        return $this->productId;
    }

    function getLanguage() {
        return $this->language;
    }

    function getKey() {
        return $this->key;
    }

    function getValue() {
        return $this->value;
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

    function setId($id): void {
        $this->id = $id;
    }

    function setProductId($productId): void {
        $this->productId = $productId;
    }

    function setLanguage($language): void {
        $this->language = $language;
    }

    function setKey($key): void {
        $this->key = $key;
    }

    function setValue($value): void {
        $this->value = $value;
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
