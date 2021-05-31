<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of BusinessCustomerAddressMapping
 *
 * @author Uday
 */
class BusinessCustomerAddressMapping {
    
    private $id;
    private $businessId;
    private $locationId;
    private $userId;
    private $addressId;
    private $approved;
    private $executiveIds;
    
    function getId() {
        return $this->id;
    }

    function getBusinessId() {
        return $this->businessId;
    }

    function getLocationId() {
        return $this->locationId;
    }

    function getUserId() {
        return $this->userId;
    }

    function getAddressId() {
        return $this->addressId;
    }

    function getApproved() {
        return $this->approved;
    }

    function getExecutiveIds() {
        return $this->executiveIds;
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

    function setUserId($userId): void {
        $this->userId = $userId;
    }

    function setAddressId($addressId): void {
        $this->addressId = $addressId;
    }

    function setApproved($approved): void {
        $this->approved = $approved;
    }

    function setExecutiveIds($executiveIds): void {
        $this->executiveIds = $executiveIds['executiveIds'];
    }


}
