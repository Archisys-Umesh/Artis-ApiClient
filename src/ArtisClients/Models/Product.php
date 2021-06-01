<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of Product
 *
 * @author Uday
 */
class Product {
    
    private $Id;
    private $PrimaryMediaId;
    private $CategoryId;
    private $ManufacturerId;
    private $BrandId;
    
    /**
     * @var BusinessCustomerAddressMapping
     */
    public $AttributeValues;
    
    private $Attributes;
    private $BusinessId;
    private $SeoTags;
    private $VideoURL;
    private $ProductStatus;
    private $CategoryName;
    private $CategoryMediaId;
    private $ManufacturerName;
    private $BrandName;
    private $Sku;
    private $ProductName;
    private $ProductSummary;
    private $ProductDescription;
    private $ProductType;
    
    
}
