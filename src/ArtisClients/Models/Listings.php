<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Listings
 *
 * @author Uday
 */
class Listings {
    
    private $id;
    private $businessId;
    private $locationId;
    private $productId;
    private $unitId;
    private $availability;
    private $quantity;
    private $maxOrderQuantity;
    private $packingSize;
    private $startDate;
    private $endDate;
    private $maxRetailPrice;
    private $discountPercent;
    private $offerPrice;
    private $enabled;
    private $stockQuantity;
    private $alertQuantity;
    private $stockQuantityDate;
    private $isContractApplied;
    
    function getId() {
        return $this->id;
    }

    function getBusinessId() {
        return $this->businessId;
    }

    function getLocationId() {
        return $this->locationId;
    }

    function getProductId() {
        return $this->productId;
    }

    function getUnitId() {
        return $this->unitId;
    }

    function getAvailability() {
        return $this->availability;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getMaxOrderQuantity() {
        return $this->maxOrderQuantity;
    }

    function getPackingSize() {
        return $this->packingSize;
    }

    function getStartDate() {
        return $this->startDate;
    }

    function getEndDate() {
        return $this->endDate;
    }

    function getMaxRetailPrice() {
        return $this->maxRetailPrice;
    }

    function getDiscountPercent() {
        return $this->discountPercent;
    }

    function getOfferPrice() {
        return $this->offerPrice;
    }

    function getEnabled() {
        return $this->enabled;
    }

    function getStockQuantity() {
        return $this->stockQuantity;
    }

    function getAlertQuantity() {
        return $this->alertQuantity;
    }

    function getStockQuantityDate() {
        return $this->stockQuantityDate;
    }

    function getIsContractApplied() {
        return $this->isContractApplied;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setBusinessId($businessId): void {
        $this->businessId = $businessId;
    }

    function setLocationId($locationId): void {
        $this->locationId = $locationId;
    }

    function setProductId($productId): void {
        $this->productId = $productId;
    }

    function setUnitId($unitId): void {
        $this->unitId = $unitId;
    }

    function setAvailability($availability): void {
        $this->availability = $availability;
    }

    function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }

    function setMaxOrderQuantity($maxOrderQuantity): void {
        $this->maxOrderQuantity = $maxOrderQuantity;
    }

    function setPackingSize($packingSize): void {
        $this->packingSize = $packingSize;
    }

    function setStartDate($startDate): void {
        $this->startDate = $startDate;
    }

    function setEndDate($endDate): void {
        $this->endDate = $endDate;
    }

    function setMaxRetailPrice($maxRetailPrice): void {
        $this->maxRetailPrice = $maxRetailPrice;
    }

    function setDiscountPercent($discountPercent): void {
        $this->discountPercent = $discountPercent;
    }

    function setOfferPrice($offerPrice): void {
        $this->offerPrice = $offerPrice;
    }

    function setEnabled($enabled): void {
        $this->enabled = $enabled;
    }

    function setStockQuantity($stockQuantity): void {
        $this->stockQuantity = $stockQuantity;
    }

    function setAlertQuantity($alertQuantity): void {
        $this->alertQuantity = $alertQuantity;
    }

    function setStockQuantityDate($stockQuantityDate): void {
        $this->stockQuantityDate = $stockQuantityDate;
    }

    function setIsContractApplied($isContractApplied): void {
        $this->isContractApplied = $isContractApplied;
    }


}
