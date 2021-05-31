<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Manufacturer
 *
 * @author Uday
 */
class Manufacturer {
    
    private $id;
    private $mediaId;
    private $name;
    private $address;
    private $contact;
    private $email;
    private $isActive;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getId() {
        return $this->id;
    }

    function getMediaId() {
        return $this->mediaId;
    }

    function getName() {
        return $this->name;
    }

    function getAddress() {
        return $this->address;
    }

    function getContact() {
        return $this->contact;
    }

    function getEmail() {
        return $this->email;
    }

    function getIsActive() {
        return $this->isActive;
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

    function setMediaId($mediaId): void {
        $this->mediaId = $mediaId;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setAddress($address): void {
        $this->address = $address;
    }

    function setContact($contact): void {
        $this->contact = $contact;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setIsActive($isActive): void {
        $this->isActive = $isActive;
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
