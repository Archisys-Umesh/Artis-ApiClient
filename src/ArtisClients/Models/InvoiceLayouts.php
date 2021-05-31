<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Models;

/**
 * Description of InvoiceLayouts
 *
 * @author Uday
 */
class InvoiceLayouts {
    
    private $id;
    private $businessId;
    private $name;
    private $headerText;
    private $invoiceNoPrefix;
    private $quotationNoPrefix;
    private $invoiceHeading;
    private $subHeading1;
    private $subHeading2;
    private $subHeading3;
    private $subHeading4;
    private $subHeading5;
    private $customeField1;
    private $customeField2;
    private $customeField3;
    private $customeField4;
    private $invoiceHeadingPaid;
    private $quotationHeading;
    private $subTotalLabel;
    private $discountLabel;
    private $taxLabel;
    private $totalLabel;
    private $totalDueLabel;
    private $paidLabel;
    private $showClientId;
    private $clientIdLabel;
    private $clientTaxLabel;
    private $dateLabel;
    private $dateTimeFormat;
    private $showTime;
    private $showBrand;
    private $showSKU;
    private $showCatCode;
    private $showExpiry;
    private $showLot;
    private $showSaleDescription;
    private $salesPersonLabel;
    private $showSalesPerson;
    private $tableProductLabel;
    private $tableQTYLabel;
    private $tableUnitPriceLabel;
    private $tableSubTotalLabel;
    private $catCodeLabel;
    private $showLogo;
    private $logoMediaId;
    private $showBusinessName;
    private $showBusinessLocationName;
    private $showLandmark;
    private $showCity;
    private $showState;
    private $showZipCode;
    private $showCountry;
    private $showMobileNo;
    private $showAlternateMobileNo;
    private $showEmail;
    private $showTax1;
    private $showTax2;
    private $showBarcode;
    private $showPayment;
    private $showCustomer;
    private $customerLable;
    private $highlightHexColor;
    private $footerText;
    private $moduleInfo;
    private $isDefault;
    private $desing;
    private $cnHeading;
    private $cnNoLabel;
    private $cnAmountLabel;
    private $tableTaxHeading;
    private $referenceNo;
    private $showPreviousBalance;
    private $previousBalanceLabel;
    private $productCustomFields;
    private $contactCustomFields;
    private $locationCustomFields;
    private $updatedBy;
    private $createdBy;
    private $createdOn;
    private $updatedOn;
    
    function getId() {
        return $this->id;
    }

    function getBusinessId() {
        return $this->businessId;
    }

    function getName() {
        return $this->name;
    }

    function getHeaderText() {
        return $this->headerText;
    }

    function getInvoiceNoPrefix() {
        return $this->invoiceNoPrefix;
    }

    function getQuotationNoPrefix() {
        return $this->quotationNoPrefix;
    }

    function getInvoiceHeading() {
        return $this->invoiceHeading;
    }

    function getSubHeading1() {
        return $this->subHeading1;
    }

    function getSubHeading2() {
        return $this->subHeading2;
    }

    function getSubHeading3() {
        return $this->subHeading3;
    }

    function getSubHeading4() {
        return $this->subHeading4;
    }

    function getSubHeading5() {
        return $this->subHeading5;
    }

    function getCustomeField1() {
        return $this->customeField1;
    }

    function getCustomeField2() {
        return $this->customeField2;
    }

    function getCustomeField3() {
        return $this->customeField3;
    }

    function getCustomeField4() {
        return $this->customeField4;
    }

    function getInvoiceHeadingPaid() {
        return $this->invoiceHeadingPaid;
    }

    function getQuotationHeading() {
        return $this->quotationHeading;
    }

    function getSubTotalLabel() {
        return $this->subTotalLabel;
    }

    function getDiscountLabel() {
        return $this->discountLabel;
    }

    function getTaxLabel() {
        return $this->taxLabel;
    }

    function getTotalLabel() {
        return $this->totalLabel;
    }

    function getTotalDueLabel() {
        return $this->totalDueLabel;
    }

    function getPaidLabel() {
        return $this->paidLabel;
    }

    function getShowClientId() {
        return $this->showClientId;
    }

    function getClientIdLabel() {
        return $this->clientIdLabel;
    }

    function getClientTaxLabel() {
        return $this->clientTaxLabel;
    }

    function getDateLabel() {
        return $this->dateLabel;
    }

    function getDateTimeFormat() {
        return $this->dateTimeFormat;
    }

    function getShowTime() {
        return $this->showTime;
    }

    function getShowBrand() {
        return $this->showBrand;
    }

    function getShowSKU() {
        return $this->showSKU;
    }

    function getShowCatCode() {
        return $this->showCatCode;
    }

    function getShowExpiry() {
        return $this->showExpiry;
    }

    function getShowLot() {
        return $this->showLot;
    }

    function getShowSaleDescription() {
        return $this->showSaleDescription;
    }

    function getSalesPersonLabel() {
        return $this->salesPersonLabel;
    }

    function getShowSalesPerson() {
        return $this->showSalesPerson;
    }

    function getTableProductLabel() {
        return $this->tableProductLabel;
    }

    function getTableQTYLabel() {
        return $this->tableQTYLabel;
    }

    function getTableUnitPriceLabel() {
        return $this->tableUnitPriceLabel;
    }

    function getTableSubTotalLabel() {
        return $this->tableSubTotalLabel;
    }

    function getCatCodeLabel() {
        return $this->catCodeLabel;
    }

    function getShowLogo() {
        return $this->showLogo;
    }

    function getLogoMediaId() {
        return $this->logoMediaId;
    }

    function getShowBusinessName() {
        return $this->showBusinessName;
    }

    function getShowBusinessLocationName() {
        return $this->showBusinessLocationName;
    }

    function getShowLandmark() {
        return $this->showLandmark;
    }

    function getShowCity() {
        return $this->showCity;
    }

    function getShowState() {
        return $this->showState;
    }

    function getShowZipCode() {
        return $this->showZipCode;
    }

    function getShowCountry() {
        return $this->showCountry;
    }

    function getShowMobileNo() {
        return $this->showMobileNo;
    }

    function getShowAlternateMobileNo() {
        return $this->showAlternateMobileNo;
    }

    function getShowEmail() {
        return $this->showEmail;
    }

    function getShowTax1() {
        return $this->showTax1;
    }

    function getShowTax2() {
        return $this->showTax2;
    }

    function getShowBarcode() {
        return $this->showBarcode;
    }

    function getShowPayment() {
        return $this->showPayment;
    }

    function getShowCustomer() {
        return $this->showCustomer;
    }

    function getCustomerLable() {
        return $this->customerLable;
    }

    function getHighlightHexColor() {
        return $this->highlightHexColor;
    }

    function getFooterText() {
        return $this->footerText;
    }

    function getModuleInfo() {
        return $this->moduleInfo;
    }

    function getIsDefault() {
        return $this->isDefault;
    }

    function getDesing() {
        return $this->desing;
    }

    function getCnHeading() {
        return $this->cnHeading;
    }

    function getCnNoLabel() {
        return $this->cnNoLabel;
    }

    function getCnAmountLabel() {
        return $this->cnAmountLabel;
    }

    function getTableTaxHeading() {
        return $this->tableTaxHeading;
    }

    function getReferenceNo() {
        return $this->referenceNo;
    }

    function getShowPreviousBalance() {
        return $this->showPreviousBalance;
    }

    function getPreviousBalanceLabel() {
        return $this->previousBalanceLabel;
    }

    function getProductCustomFields() {
        return $this->productCustomFields;
    }

    function getContactCustomFields() {
        return $this->contactCustomFields;
    }

    function getLocationCustomFields() {
        return $this->locationCustomFields;
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

    function setBusinessId($businessId): void {
        $this->businessId = $businessId;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setHeaderText($headerText): void {
        $this->headerText = $headerText;
    }

    function setInvoiceNoPrefix($invoiceNoPrefix): void {
        $this->invoiceNoPrefix = $invoiceNoPrefix;
    }

    function setQuotationNoPrefix($quotationNoPrefix): void {
        $this->quotationNoPrefix = $quotationNoPrefix;
    }

    function setInvoiceHeading($invoiceHeading): void {
        $this->invoiceHeading = $invoiceHeading;
    }

    function setSubHeading1($subHeading1): void {
        $this->subHeading1 = $subHeading1;
    }

    function setSubHeading2($subHeading2): void {
        $this->subHeading2 = $subHeading2;
    }

    function setSubHeading3($subHeading3): void {
        $this->subHeading3 = $subHeading3;
    }

    function setSubHeading4($subHeading4): void {
        $this->subHeading4 = $subHeading4;
    }

    function setSubHeading5($subHeading5): void {
        $this->subHeading5 = $subHeading5;
    }

    function setCustomeField1($customeField1): void {
        $this->customeField1 = $customeField1;
    }

    function setCustomeField2($customeField2): void {
        $this->customeField2 = $customeField2;
    }

    function setCustomeField3($customeField3): void {
        $this->customeField3 = $customeField3;
    }

    function setCustomeField4($customeField4): void {
        $this->customeField4 = $customeField4;
    }

    function setInvoiceHeadingPaid($invoiceHeadingPaid): void {
        $this->invoiceHeadingPaid = $invoiceHeadingPaid;
    }

    function setQuotationHeading($quotationHeading): void {
        $this->quotationHeading = $quotationHeading;
    }

    function setSubTotalLabel($subTotalLabel): void {
        $this->subTotalLabel = $subTotalLabel;
    }

    function setDiscountLabel($discountLabel): void {
        $this->discountLabel = $discountLabel;
    }

    function setTaxLabel($taxLabel): void {
        $this->taxLabel = $taxLabel;
    }

    function setTotalLabel($totalLabel): void {
        $this->totalLabel = $totalLabel;
    }

    function setTotalDueLabel($totalDueLabel): void {
        $this->totalDueLabel = $totalDueLabel;
    }

    function setPaidLabel($paidLabel): void {
        $this->paidLabel = $paidLabel;
    }

    function setShowClientId($showClientId): void {
        $this->showClientId = $showClientId;
    }

    function setClientIdLabel($clientIdLabel): void {
        $this->clientIdLabel = $clientIdLabel;
    }

    function setClientTaxLabel($clientTaxLabel): void {
        $this->clientTaxLabel = $clientTaxLabel;
    }

    function setDateLabel($dateLabel): void {
        $this->dateLabel = $dateLabel;
    }

    function setDateTimeFormat($dateTimeFormat): void {
        $this->dateTimeFormat = $dateTimeFormat;
    }

    function setShowTime($showTime): void {
        $this->showTime = $showTime;
    }

    function setShowBrand($showBrand): void {
        $this->showBrand = $showBrand;
    }

    function setShowSKU($showSKU): void {
        $this->showSKU = $showSKU;
    }

    function setShowCatCode($showCatCode): void {
        $this->showCatCode = $showCatCode;
    }

    function setShowExpiry($showExpiry): void {
        $this->showExpiry = $showExpiry;
    }

    function setShowLot($showLot): void {
        $this->showLot = $showLot;
    }

    function setShowSaleDescription($showSaleDescription): void {
        $this->showSaleDescription = $showSaleDescription;
    }

    function setSalesPersonLabel($salesPersonLabel): void {
        $this->salesPersonLabel = $salesPersonLabel;
    }

    function setShowSalesPerson($showSalesPerson): void {
        $this->showSalesPerson = $showSalesPerson;
    }

    function setTableProductLabel($tableProductLabel): void {
        $this->tableProductLabel = $tableProductLabel;
    }

    function setTableQTYLabel($tableQTYLabel): void {
        $this->tableQTYLabel = $tableQTYLabel;
    }

    function setTableUnitPriceLabel($tableUnitPriceLabel): void {
        $this->tableUnitPriceLabel = $tableUnitPriceLabel;
    }

    function setTableSubTotalLabel($tableSubTotalLabel): void {
        $this->tableSubTotalLabel = $tableSubTotalLabel;
    }

    function setCatCodeLabel($catCodeLabel): void {
        $this->catCodeLabel = $catCodeLabel;
    }

    function setShowLogo($showLogo): void {
        $this->showLogo = $showLogo;
    }

    function setLogoMediaId($logoMediaId): void {
        $this->logoMediaId = $logoMediaId;
    }

    function setShowBusinessName($showBusinessName): void {
        $this->showBusinessName = $showBusinessName;
    }

    function setShowBusinessLocationName($showBusinessLocationName): void {
        $this->showBusinessLocationName = $showBusinessLocationName;
    }

    function setShowLandmark($showLandmark): void {
        $this->showLandmark = $showLandmark;
    }

    function setShowCity($showCity): void {
        $this->showCity = $showCity;
    }

    function setShowState($showState): void {
        $this->showState = $showState;
    }

    function setShowZipCode($showZipCode): void {
        $this->showZipCode = $showZipCode;
    }

    function setShowCountry($showCountry): void {
        $this->showCountry = $showCountry;
    }

    function setShowMobileNo($showMobileNo): void {
        $this->showMobileNo = $showMobileNo;
    }

    function setShowAlternateMobileNo($showAlternateMobileNo): void {
        $this->showAlternateMobileNo = $showAlternateMobileNo;
    }

    function setShowEmail($showEmail): void {
        $this->showEmail = $showEmail;
    }

    function setShowTax1($showTax1): void {
        $this->showTax1 = $showTax1;
    }

    function setShowTax2($showTax2): void {
        $this->showTax2 = $showTax2;
    }

    function setShowBarcode($showBarcode): void {
        $this->showBarcode = $showBarcode;
    }

    function setShowPayment($showPayment): void {
        $this->showPayment = $showPayment;
    }

    function setShowCustomer($showCustomer): void {
        $this->showCustomer = $showCustomer;
    }

    function setCustomerLable($customerLable): void {
        $this->customerLable = $customerLable;
    }

    function setHighlightHexColor($highlightHexColor): void {
        $this->highlightHexColor = $highlightHexColor;
    }

    function setFooterText($footerText): void {
        $this->footerText = $footerText;
    }

    function setModuleInfo($moduleInfo): void {
        $this->moduleInfo = $moduleInfo;
    }

    function setIsDefault($isDefault): void {
        $this->isDefault = $isDefault;
    }

    function setDesing($desing): void {
        $this->desing = $desing;
    }

    function setCnHeading($cnHeading): void {
        $this->cnHeading = $cnHeading;
    }

    function setCnNoLabel($cnNoLabel): void {
        $this->cnNoLabel = $cnNoLabel;
    }

    function setCnAmountLabel($cnAmountLabel): void {
        $this->cnAmountLabel = $cnAmountLabel;
    }

    function setTableTaxHeading($tableTaxHeading): void {
        $this->tableTaxHeading = $tableTaxHeading;
    }

    function setReferenceNo($referenceNo): void {
        $this->referenceNo = $referenceNo;
    }

    function setShowPreviousBalance($showPreviousBalance): void {
        $this->showPreviousBalance = $showPreviousBalance;
    }

    function setPreviousBalanceLabel($previousBalanceLabel): void {
        $this->previousBalanceLabel = $previousBalanceLabel;
    }

    function setProductCustomFields($productCustomFields): void {
        $this->productCustomFields = $productCustomFields;
    }

    function setContactCustomFields($contactCustomFields): void {
        $this->contactCustomFields = $contactCustomFields;
    }

    function setLocationCustomFields($locationCustomFields): void {
        $this->locationCustomFields = $locationCustomFields;
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
