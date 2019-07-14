<?php

class Hash{
    public static function make($name, $string=''){
        return hash('sha256', $name . $string);
    }

    public static function salt($number){
        return mcrypt_create_iv($number);

    }

    public static function unique(){
        
    return self::make(uniqid());
    }
 

}