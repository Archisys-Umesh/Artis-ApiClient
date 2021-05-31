<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Archisys\ArtisApiClient\Models;
/**
 * Description of Address
 *
 * @author Uday
 */
class Address {
    
    private $id;
    private $name;
    private $namePrefix;
    private $title;
    private $contactId;
    private $addressLine1;
    private $addressLine2;
    private $city;
    private $state;
    private $country;
    private $latitude;
    private $longitude;
    private $pin;
    private $isDefault;
    private $isActive;
    private $segments;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getNamePrefix() {
        return $this->namePrefix;
    }

    function getTitle() {
        return $this->title;
    }

    function getContactId() {
        return $this->contactId;
    }

    function getAddressLine1() {
        return $this->addressLine1;
    }

    function getAddressLine2() {
        return $this->addressLine2;
    }

    function getCity() {
        return $this->city;
    }

    function getState() {
        return $this->state;
    }

    function getCountry() {
        return $this->country;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function getPin() {
        return $this->pin;
    }

    function getIsDefault() {
        return $this->isDefault;
    }

    function getIsActive() {
        return $this->isActive;
    }

    function getSegments() {
        return $this->segments;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setNamePrefix($namePrefix): void {
        $this->namePrefix = $namePrefix;
    }

    function setTitle($title): void {
        $this->title = $title;
    }

    function setContactId($contactId): void {
        $this->contactId = $contactId;
    }

    function setAddressLine1($addressLine1): void {
        $this->addressLine1 = $addressLine1;
    }

    function setAddressLine2($addressLine2): void {
        $this->addressLine2 = $addressLine2;
    }

    function setCity($city): void {
        $this->city = $city;
    }

    function setState($state): void {
        $this->state = $state;
    }

    function setCountry($country): void {
        $this->country = $country;
    }

    function setLatitude($latitude): void {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude): void {
        $this->longitude = $longitude;
    }

    function setPin($pin): void {
        $this->pin = $pin;
    }

    function setIsDefault($isDefault): void {
        $this->isDefault = $isDefault;
    }

    function setIsActive($isActive): void {
        $this->isActive = $isActive;
    }

    function setSegments($segments): void {
        $this->segments = $segments;
    }


}
