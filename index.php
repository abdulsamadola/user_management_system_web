<?php
include_once 'core/init.php';

if(Session::exist('success')){
     echo Session::flash('success');
}
