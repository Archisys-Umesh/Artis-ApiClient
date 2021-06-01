<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Unit
 *
 * @author Uday
 */
class Unit {
   
    private $id;
    private $name;
    private $code;
    private $allowDecimal;
    private $baseUnitId;
    private $baseUnitMultiplier;
    private $decimalPlaces;
    private $orderBy;
    private $derivedUnits;
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

    function getCode() {
        return $this->code;
    }

    function getAllowDecimal() {
        return $this->allowDecimal;
    }

    function getBaseUnitId() {
        return $this->baseUnitId;
    }

    function getBaseUnitMultiplier() {
        return $this->baseUnitMultiplier;
    }

    function getDecimalPlaces() {
        return $this->decimalPlaces;
    }

    function getOrderBy() {
        return $this->orderBy;
    }

    function getDerivedUnits() {
        return $this->derivedUnits;
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

    function setCode($code): void {
        $this->code = $code;
    }

    function setAllowDecimal($allowDecimal): void {
        $this->allowDecimal = $allowDecimal;
    }

    function setBaseUnitId($baseUnitId): void {
        $this->baseUnitId = $baseUnitId;
    }

    function setBaseUnitMultiplier($baseUnitMultiplier): void {
        $this->baseUnitMultiplier = $baseUnitMultiplier;
    }

    function setDecimalPlaces($decimalPlaces): void {
        $this->decimalPlaces = $decimalPlaces;
    }

    function setOrderBy($orderBy): void {
        $this->orderBy = $orderBy;
    }

    function setDerivedUnits($derivedUnits): void {
        $this->derivedUnits = $derivedUnits;
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
