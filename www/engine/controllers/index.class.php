<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Index extends Core {

    public function __construct() {
        parent::__construct();
    }

    public function defaultInit() {
        echo 'default';
    }

    public function view() {
        
     echo $this->database->update("users", array(
         "email" => "vladi@coolpost.it",
         "login" => "vladi",
         "password" => md5("prova"),
         "firstname" => 'Vladimir',
         "surname" => 'Barabash',
         "nation" => "Ucraina"
         ), "id = 2");
        
        
    }
    
    public function defaultPage() {
        parent::defaultPage();
    }
    
    public function getErrorPage() {
        parent::getErrorPage();
    }
    
    public function __destruct() {
        
    }

}
