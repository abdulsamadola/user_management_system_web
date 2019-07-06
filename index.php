<?php
include_once 'core/init.php';

$user = DB::getinstance()->update("users", 4, array(
     'username' => 'omi',
     'password' => 'ff'
));

$users = array( 'ola', 'baba', 'mamam'
);
