<?php
include_once 'core/init.php';

$user = DB::getinstance()->update("users", 1, array(
     'username' => 'olamilekan',
     'password' => 'newpass',
));