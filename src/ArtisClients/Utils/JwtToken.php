<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Archisys\ArtisApiClient\Utils;

use Firebase\JWT\JWT;
use Ramsey\Uuid\Uuid;
/**
 * Description of JwtToken
 *
 * @author Uday
 */
class JwtToken {
    
    public static function token(){
        
        $issuedAt = time();
        $expire = $issuedAt + 3600;
        
        $data = [
            'iat' => $issuedAt,
            'exp' => $expire,
            'appversion' => "1.0.0",
            'appversioncode' => "1",
            'aud' => ["com.vratha.maaooris"],
            'id' => Uuid::uuid4(),
            'iss' => "com.archisys.artis",
            'manufacturer' => "Archisys",
            'model' => "Artis",
            'notificationid' => "",
            'os' => "Ubuntu",
            'osversion' => "18.04",
            'platform' => "PHP Web"
        ];
        $secretKey = "2C39927D43F04E1CBAB1615841D94000";

        $jwtToken = JWT::encode(
                        $data,
                        $secretKey,
                        'HS256'
        );

        return $jwtToken;
    }
}
