<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Archisys\Ecom\Authentication;

require_once __DIR__ . '/../../../src/configuration.php';

use Firebase\JWT\JWT;
use Ramsey\Uuid\Uuid;

/**
 * Description of B2CAuth
 *
 * @author Uday
 */
class B2CAuth {
    
    public static function index($isdCode,$mobile){
        
        $jwtToken = self::createJwtToken();
        $appFirstStart = self::appFirstStart($jwtToken);
        
        $getResult = explode("Result", $appFirstStart);
        $getToken = explode("Token", $getResult[1]);
        $authenticationToken = str_replace(array('}', ':', '"' ), array('', '', ''), $getToken[1]);
        
        $loginWithOTP = self::loginWithOTP($jwtToken,$authenticationToken,$isdCode,$mobile);
        //$registerWithUserDetail = self::registerWithUserDetail($jwtToken,$authenticationToken,$name,$email,$isdCode,$mobile,$sapNo);
        
        //$validateEmailMobile = self::validateEmailMobile($jwtToken,$authenticationToken,$email, $isdCode, $mobile);
    }
    
    public static function createJwtToken(){
        
        $issuedAt = time();
        $expire = $issuedAt + 3600;
        
        $data = [
            'iat' => $issuedAt,
            'exp' => $expire,
            'appversion' => "1.0.0",
            'appversioncode' => "1",
            'aud' => ["com.archisys".'.'._aud],
            'id' => Uuid::uuid4(),
            'iss' => "com.archisys.artis",
            'manufacturer' => "Archisys",
            'model' => "Artis",
            'notificationid' => "",
            'os' => "Ubuntu",
            'osversion' => "18.04",
            'platform' => "PHP Web"
        ];
        $secretKey = (_jwtSecretKey);

        $jwtToken = JWT::encode(
                        $data,
                        $secretKey,
                        'HS256'
        );

        return $jwtToken;
    }
    
    public static function appFirstStart($jwtDeviceToken) {
        
        $url = _url.'/'.'Api/AppFirstStart';
        
        $headers = array(
            'Device' => "Device:".$jwtDeviceToken
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
       
        return $response;
    }
    
    public static function registerWithUserDetail($jwtToken,$authenticationToken,$name,$email,$isdCode,$mobile,$sapNo){
        
        $url = _url.'/'.'Api/RegisterWithUserDetail';
        $headers = array(
            'Device' => "Device:".$jwtToken,
            'Authorization' => "Authorization: Bearer ".$authenticationToken
        );
        
        $appUserDetais = array(
            'name' => $name,
            'email' => $email,
            'isdCode' => $isdCode,
            'mobile' => $mobile,
            'userName' => '',
            'password' => '',
            'confirmPassword' => '',
            'code' => $sapNo,
            'referralCode' => ''
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
    
    public static function validateEmailMobile($jwtToken,$authenticationToken,$email, $isdCode, $mobile) {
        
       
        $url = _url.'/'.'Api/RegisterWithUserDetail';
        $headers = array(
            'Device' => "Device:".$jwtToken,
            'Authorization' => "Authorization: Bearer ".$authenticationToken
        );
        
        $appUserEmailMobile= array(
            'email' => $email,
            'isdCode' => $isdCode,
            'mobile' => $mobile
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($appUserEmailMobile));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
       
        return $response;
    }
    
    public static function loginWithOTP($jwtToken, $authenticationToken, $isdCode, $mobile){
        
        $url = _url.'/'.'Api/Login';
        $headers = array(
            'Device' => "Device:".$jwtToken,
            'Authorization' => "Authorization: Bearer ".$authenticationToken
        );
        
        $loginWithOTP = array(
            'isdCode' => $isdCode,
            'mobile' => $mobile
        );
       
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($loginWithOTP));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        return $response;
    }
    
    public static function loginOtpValidate($jwtToken, $authenticationToken, $isdCode, $mobile, $otp){
        
        $url = _url.'/'.'Api/Validate';
        $headers = array(
            'Device' => "Device:".$jwtToken,
            'Authorization' => "Authorization: Bearer ".$authenticationToken
        );
        
        $loginWithOTPValidate = array(
            'isdCode' => $isdCode,
            'mobile' => $mobile,
            'code' => $otp
        );
       
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($loginWithOTPValidate));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        return $response;
    }
    
    
}
