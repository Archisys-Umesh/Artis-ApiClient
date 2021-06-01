<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of ProductMedias
 *
 * @author Uday
 */
class ProductMedias {
    
    private $productId;
    private $mediaId;
    private $displayOrder;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getProductId() {
        return $this->productId;
    }

    function getMediaId() {
        return $this->mediaId;
    }

    function getDisplayOrder() {
        return $this->displayOrder;
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

    function setMediaId($mediaId): void {
        $this->mediaId = $mediaId;
    }

    function setDisplayOrder($displayOrder): void {
        $this->displayOrder = $displayOrder;
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
