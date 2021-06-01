<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of ProductAttributes
 *
 * @author Uday
 */
class ProductAttributes {
    
    private $id;
    private $productId;
    private $mediaId;
    private $hexColor;
    private $productAttributeGroupId;
    private $displayOrder;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    /**
     * @var ProductAttributeValues
     */
    public $productAttributeValues;
    
    function getId() {
        return $this->id;
    }

    function getProductId() {
        return $this->productId;
    }

    function getMediaId() {
        return $this->mediaId;
    }

    function getHexColor() {
        return $this->hexColor;
    }

    function getProductAttributeGroupId() {
        return $this->productAttributeGroupId;
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

    function getProductAttributeValues(): ProductAttributeValues {
        return $this->productAttributeValues;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setProductId($productId): void {
        $this->productId = $productId;
    }

    function setMediaId($mediaId): void {
        $this->mediaId = $mediaId;
    }

    function setHexColor($hexColor): void {
        $this->hexColor = $hexColor;
    }

    function setProductAttributeGroupId($productAttributeGroupId): void {
        $this->productAttributeGroupId = $productAttributeGroupId;
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

    function setProductAttributeValues(ProductAttributeValues $productAttributeValues): void {
        $this->productAttributeValues = $productAttributeValues;
    }


}
