<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Product
 *
 * @author Uday
 */
class Product {
    
    private $id;
    private $groupId;
    private $businessId;
    private $seoTags;
    private $primaryMediaId;
    private $productStatus;
    private $categoryId;
    private $brandId;
    private $manufacturerId;
    private $sku;
    private $attributes;
    private $videoURL;
    
    /**
     * @var Category
     */
    public $category;
    
    function getId() {
        return $this->id;
    }

    function getGroupId() {
        return $this->groupId;
    }

    function getBusinessId() {
        return $this->businessId;
    }

    function getSeoTags() {
        return $this->seoTags;
    }

    function getPrimaryMediaId() {
        return $this->primaryMediaId;
    }

    function getProductStatus() {
        return $this->productStatus;
    }

    function getCategoryId() {
        return $this->categoryId;
    }

    function getBrandId() {
        return $this->brandId;
    }

    function getManufacturerId() {
        return $this->manufacturerId;
    }

    function getSku() {
        return $this->sku;
    }

    function getAttributes() {
        return $this->attributes;
    }

    function getVideoURL() {
        return $this->videoURL;
    }

    function getCategory(): Category {
        return $this->category;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setGroupId($groupId): void {
        $this->groupId = $groupId;
    }

    function setBusinessId($businessId): void {
        $this->businessId = $businessId;
    }

    function setSeoTags($seoTags): void {
        $this->seoTags = $seoTags;
    }

    function setPrimaryMediaId($primaryMediaId): void {
        $this->primaryMediaId = $primaryMediaId;
    }

    function setProductStatus($productStatus): void {
        $this->productStatus = $productStatus;
    }

    function setCategoryId($categoryId): void {
        $this->categoryId = $categoryId;
    }

    function setBrandId($brandId): void {
        $this->brandId = $brandId;
    }

    function setManufacturerId($manufacturerId): void {
        $this->manufacturerId = $manufacturerId;
    }

    function setSku($sku): void {
        $this->sku = $sku;
    }

    function setAttributes($attributes): void {
        $this->attributes = $attributes;
    }

    function setVideoURL($videoURL): void {
        $this->videoURL = $videoURL;
    }

    function setCategory(Category $category): void {
        $this->category = $category;
    }



}
