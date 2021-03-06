<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of ProductAttributeGroups
 *
 * @author Uday
 */
class ProductAttributeGroups {
    
    private $id;
    private $groupName;
    private $displayOrder;
    private $productId;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    /**
     * @var ProductAttributes
     */
    public $productAttributes;
    
    function getProductAttributes(): ProductAttributes {
        return $this->productAttributes;
    }

    function setProductAttributes(ProductAttributes $productAttributes): void {
        $this->productAttributes = $productAttributes;
    }

        
    function getId() {
        return $this->id;
    }

    function getGroupName() {
        return $this->groupName;
    }

    function getDisplayOrder() {
        return $this->displayOrder;
    }

    function getProductId() {
        return $this->productId;
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

    function setGroupName($groupName): void {
        $this->groupName = $groupName;
    }

    function setDisplayOrder($displayOrder): void {
        $this->displayOrder = $displayOrder;
    }

    function setProductId($productId): void {
        $this->productId = $productId;
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
