<?php
namespace App\Libraries;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTHelper {
    static function encode($data, $lifespan){
        //encrypt user data
        return JWT::encode([
            'iss' => base_url(),
            'aud' => $data,
            'iat' => time(),
            'nbf' => time(),
            'exp' => time() + $lifespan
        ], getenv("JWT_SECRET_KEY"), 'HS256');
    }

    static function decode($token){
        return JWT::decode($token, new Key(getenv("JWT_SECRET_KEY"), 'HS256'))->aud;
    }
}
