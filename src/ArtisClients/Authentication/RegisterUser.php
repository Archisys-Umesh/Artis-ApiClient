<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\ArtisApiClient\Authentication;
/**
 * Description of registerUser
 *
 * @author Uday
 */
class RegisterUser {
    
    private $name;
    private $email;
    private $isdCode;
    private $mobile;
    private $sapNo;
    
    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getIsdCode() {
        return $this->isdCode;
    }

    function getMobile() {
        return $this->mobile;
    }

    function getSapNo() {
        return $this->sapNo;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setIsdCode($isdCode): void {
        $this->isdCode = $isdCode;
    }

    function setMobile($mobile): void {
        $this->mobile = $mobile;
    }

    function setSapNo($sapNo): void {
        $this->sapNo = $sapNo;
    }

    
        
    public static function registerWithUserDetail($jwtToken,$authenticationToken,$name,$email,$isdCode,$mobile,$sapNo){
        
        $url = 'https://artisdev.biotech.archisys.biz/Api/RegisterWithUserDetail';
        $headers = array(
            'Device' => "Device:".$jwtToken,
            'Authorization' => "Authorization: ".$authenticationToken,
            'Content-Type' => "Content-Type: application/json"
        );
        
        $appUserDetais = array(
            'name' => $name,
            'email' => $email,
            'isdCode' => $isdCode,
            'mobile' => $mobile,
            'userName' => null,
            'password' => null,
            'confirmPassword' => null,
            'code' => $sapNo,
            'referralCode' => null
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($appUserDetais));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        return $response;
    }
}
