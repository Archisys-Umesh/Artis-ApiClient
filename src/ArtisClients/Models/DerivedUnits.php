<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of DerivedUnits
 *
 * @author Uday
 */
class DerivedUnits {
    
    private $Id;
    private $Name;
    private $Code;
    private $AllowDecimal;
    private $BaseUnitId;
    private $BaseUnitMultiplier;
    private $OrderBy;
    private $CreatedBy;
    private $CreatedOn;
    
    function getId() {
        return $this->Id;
    }

    function getName() {
        return $this->Name;
    }

    function getCode() {
        return $this->Code;
    }

    function getAllowDecimal() {
        return $this->AllowDecimal;
    }

    function getBaseUnitId() {
        return $this->BaseUnitId;
    }

    function getBaseUnitMultiplier() {
        return $this->BaseUnitMultiplier;
    }

    function getOrderBy() {
        return $this->OrderBy;
    }

    function getCreatedBy() {
        return $this->CreatedBy;
    }

    function getCreatedOn() {
        return $this->CreatedOn;
    }

    function setId($Id): void {
        $this->Id = $Id;
    }

    function setName($Name): void {
        $this->Name = $Name;
    }

    function setCode($Code): void {
        $this->Code = $Code;
    }

    function setAllowDecimal($AllowDecimal): void {
        $this->AllowDecimal = $AllowDecimal;
    }

    function setBaseUnitId($BaseUnitId): void {
        $this->BaseUnitId = $BaseUnitId;
    }

    function setBaseUnitMultiplier($BaseUnitMultiplier): void {
        $this->BaseUnitMultiplier = $BaseUnitMultiplier;
    }

    function setOrderBy($OrderBy): void {
        $this->OrderBy = $OrderBy;
    }

    function setCreatedBy($CreatedBy): void {
        $this->CreatedBy = $CreatedBy;
    }

    function setCreatedOn($CreatedOn): void {
        $this->CreatedOn = $CreatedOn;
    }


}
