<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Brand
 *
 * @author Uday
 */
class Brand {
    
    private $id;
    private $name;
    private $mediaId;
    private $manufacturerId;
    private $isActive;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getMediaId() {
        return $this->mediaId;
    }

    function getManufacturerId() {
        return $this->manufacturerId;
    }

    function getIsActive() {
        return $this->isActive;
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

    function setName($name): void {
        $this->name = $name;
    }

    function setMediaId($mediaId): void {
        $this->mediaId = $mediaId;
    }

    function setManufacturerId($manufacturerId): void {
        $this->manufacturerId = $manufacturerId;
    }

    function setIsActive($isActive): void {
        $this->isActive = $isActive;
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
