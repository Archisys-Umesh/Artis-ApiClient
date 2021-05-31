<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Business
 *
 * @author Uday
 */
class Business {
    
    private $id;
    private $name;
    private $accountingMethod;
    private $kycEnable;
    private $financialYearStartMonth;
    private $logoMediaId;
    private $ownerContactId;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getAccountingMethod() {
        return $this->accountingMethod;
    }

    function getKycEnable() {
        return $this->kycEnable;
    }

    function getFinancialYearStartMonth() {
        return $this->financialYearStartMonth;
    }

    function getLogoMediaId() {
        return $this->logoMediaId;
    }

    function getOwnerContactId() {
        return $this->ownerContactId;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setAccountingMethod($accountingMethod): void {
        $this->accountingMethod = $accountingMethod;
    }

    function setKycEnable($kycEnable): void {
        $this->kycEnable = $kycEnable;
    }

    function setFinancialYearStartMonth($financialYearStartMonth): void {
        $this->financialYearStartMonth = $financialYearStartMonth;
    }

    function setLogoMediaId($logoMediaId): void {
        $this->logoMediaId = $logoMediaId;
    }

    function setOwnerContactId($ownerContactId): void {
        $this->ownerContactId = $ownerContactId;
    }


}
