<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Category
 *
 * @author Uday
 */
class Category {
    
    private $id;
    private $name;
    private $description;
    private $parentId;
    private $mediaId;
    private $displayOrder;
    private $displayOnClient;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getParentId() {
        return $this->parentId;
    }

    function getMediaId() {
        return $this->mediaId;
    }

    function getDisplayOrder() {
        return $this->displayOrder;
    }

    function getDisplayOnClient() {
        return $this->displayOnClient;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setParentId($parentId): void {
        $this->parentId = $parentId;
    }

    function setMediaId($mediaId): void {
        $this->mediaId = $mediaId;
    }

    function setDisplayOrder($displayOrder): void {
        $this->displayOrder = $displayOrder;
    }

    function setDisplayOnClient($displayOnClient): void {
        $this->displayOnClient = $displayOnClient;
    }


}
