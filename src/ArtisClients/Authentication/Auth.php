<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Archisys\Ecom\Authentication;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/settings.php';

use Firebase\JWT\JWT;
use Ramsey\Uuid\Uuid;
/**
 * Description of Auth
 *
 * @author Uday
 */
class Auth {
    
    public static function httpPost($url, $data, $headerToken){
        
        $headers = array(
            "Accept: application/json",
            "Device: Bearer {'$headerToken'}",
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    
    public static function createJwtToken(){
        
        $issuedAt = time();
        $expire = $issuedAt + 3600;
        
        $data = [
            'iat' => $issuedAt,
            'exp' => $expire,
            'appversion' => "1.0.0",
            'appversioncode' => "1",
            'aud' => ["com.archisys.artis"],
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
        
        $url = 'http://artis.biotech.archisys.biz/Api/AppFirstStart';
        $headerToken = $jwtDeviceToken;
        
        $appFirstStartResponse = $this->httpPost($url, $data, $headerToken);

        return $appFirstStartResponse;
    }
    
    public static function createNewUser(){
        
        $jwtToken = $this->createJwtToken();
        
        $appFirstStart = $this->appFirstStart($jwtToken);
        
        return $appFirstStart;
    }
}
