<?php

namespace App\core;

class Request{

public static function requestUri(){
    
       return trim(PARSE_URL($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
       
    }
public static function method(){

    return ($_SERVER['REQUEST_METHOD']);

    }
}
