<?php

class Session{

    public static function put($name, $token){
      return $_SESSION[$name] = $token;
    }
}