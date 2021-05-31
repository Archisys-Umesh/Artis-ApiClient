<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Tag
 *
 * @author Uday
 */
class Tag {
    
    private $id;
    private $tagTitle;
    private $tagSeoNames;
    private $tagMediaId;
    private $allowDetail;
    private $colorCode;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getId() {
        return $this->id;
    }

    function getTagTitle() {
        return $this->tagTitle;
    }

    function getTagSeoNames() {
        return $this->tagSeoNames;
    }

    function getTagMediaId() {
        return $this->tagMediaId;
    }

    function getAllowDetail() {
        return $this->allowDetail;
    }

    function getColorCode() {
        return $this->colorCode;
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

    function setTagTitle($tagTitle): void {
        $this->tagTitle = $tagTitle;
    }

    function setTagSeoNames($tagSeoNames): void {
        $this->tagSeoNames = $tagSeoNames;
    }

    function setTagMediaId($tagMediaId): void {
        $this->tagMediaId = $tagMediaId;
    }

    function setAllowDetail($allowDetail): void {
        $this->allowDetail = $allowDetail;
    }

    function setColorCode($colorCode): void {
        $this->colorCode = $colorCode;
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
