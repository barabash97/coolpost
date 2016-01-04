<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Error extends Core {
    
    private static $instance;
    
    public function __construct(){
        echo 'Error CLASS';
    }
    
    public static function getInstance() {
        if (!self::$instance) { // If no instance then make one
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function defaultPage(){
        echo '           DEFAULT ERROR PAGE';
    }
    

}

