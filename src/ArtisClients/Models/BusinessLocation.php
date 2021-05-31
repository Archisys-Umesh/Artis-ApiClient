<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of BusinessLocation
 *
 * @author Uday
 */
class BusinessLocation {
    
    private $id;
    private $businessId;
    private $contactId;
    private $locationType;
    private $name;
    private $code;
    private $addressId;
    private $isdCode;
    private $mobile;
    private $email;
    private $parentLocationId;
    private $pincodes;
    private $city;
    private $stateId;
    private $districtId;
    private $rating;
    private $businessLocationStatus;
    private $children;
    
    function getId() {
        return $this->id;
    }

    function getBusinessId() {
        return $this->businessId;
    }

    function getContactId() {
        return $this->contactId;
    }

    function getLocationType() {
        return $this->locationType;
    }

    function getName() {
        return $this->name;
    }

    function getCode() {
        return $this->code;
    }

    function getAddressId() {
        return $this->addressId;
    }

    function getIsdCode() {
        return $this->isdCode;
    }

    function getMobile() {
        return $this->mobile;
    }

    function getEmail() {
        return $this->email;
    }

    function getParentLocationId() {
        return $this->parentLocationId;
    }

    function getPincodes() {
        return $this->pincodes;
    }

    function getCity() {
        return $this->city;
    }

    function getStateId() {
        return $this->stateId;
    }

    function getDistrictId() {
        return $this->districtId;
    }

    function getRating() {
        return $this->rating;
    }

    function getBusinessLocationStatus() {
        return $this->businessLocationStatus;
    }

    function getChildren() {
        return $this->children;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setBusinessId($businessId): void {
        $this->businessId = $businessId;
    }

    function setContactId($contactId): void {
        $this->contactId = $contactId;
    }

    function setLocationType($locationType): void {
        $this->locationType = $locationType;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setCode($code): void {
        $this->code = $code;
    }

    function setAddressId($addressId): void {
        $this->addressId = $addressId;
    }

    function setIsdCode($isdCode): void {
        $this->isdCode = $isdCode;
    }

    function setMobile($mobile): void {
        $this->mobile = $mobile;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setParentLocationId($parentLocationId): void {
        $this->parentLocationId = $parentLocationId;
    }

    function setPincodes($pincodes): void {
        $this->pincodes = $pincodes;
    }

    function setCity($city): void {
        $this->city = $city;
    }

    function setStateId($stateId): void {
        $this->stateId = $stateId;
    }

    function setDistrictId($districtId): void {
        $this->districtId = $districtId;
    }

    function setRating($rating): void {
        $this->rating = $rating;
    }

    function setBusinessLocationStatus($businessLocationStatus): void {
        $this->businessLocationStatus = $businessLocationStatus;
    }

    function setChildren($children): void {
        $this->children = $children;
    }


}
