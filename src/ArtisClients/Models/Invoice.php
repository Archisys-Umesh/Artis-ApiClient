<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Invoice
 *
 * @author Uday
 */
class Invoice {
    
    private $id;
    private $businessId;
    private $name;
    private $scheme_Type;
    private $prefix;
    private $startNumber;
    private $invoiceCount;
    private $totalDigits;
    private $isDefault;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getId() {
        return $this->id;
    }

    function getBusinessId() {
        return $this->businessId;
    }

    function getName() {
        return $this->name;
    }

    function getScheme_Type() {
        return $this->scheme_Type;
    }

    function getPrefix() {
        return $this->prefix;
    }

    function getStartNumber() {
        return $this->startNumber;
    }

    function getInvoiceCount() {
        return $this->invoiceCount;
    }

    function getTotalDigits() {
        return $this->totalDigits;
    }

    function getIsDefault() {
        return $this->isDefault;
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

    function setBusinessId($businessId): void {
        $this->businessId = $businessId;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setScheme_Type($scheme_Type): void {
        $this->scheme_Type = $scheme_Type;
    }

    function setPrefix($prefix): void {
        $this->prefix = $prefix;
    }

    function setStartNumber($startNumber): void {
        $this->startNumber = $startNumber;
    }

    function setInvoiceCount($invoiceCount): void {
        $this->invoiceCount = $invoiceCount;
    }

    function setTotalDigits($totalDigits): void {
        $this->totalDigits = $totalDigits;
    }

    function setIsDefault($isDefault): void {
        $this->isDefault = $isDefault;
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
