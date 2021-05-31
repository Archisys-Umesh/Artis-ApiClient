<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of ProductTags
 *
 * @author Uday
 */
class ProductTags {
    
    private $productId;
    private $tagId;
    private $showTagImage;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getProductId() {
        return $this->productId;
    }

    function getTagId() {
        return $this->tagId;
    }

    function getShowTagImage() {
        return $this->showTagImage;
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

    function setTagId($tagId): void {
        $this->tagId = $tagId;
    }

    function setShowTagImage($showTagImage): void {
        $this->showTagImage = $showTagImage;
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
