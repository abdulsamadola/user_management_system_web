<?php

class Validate{

    private $_db,
            $_errors = array(),
            $_passed = false;

            public function __construct() {
                $this->_db = DB::getInstance();
            }

            public function check($source, $items = array()){

                foreach($items as $item){
                    echo $source[$item]; 
                }

            }

}