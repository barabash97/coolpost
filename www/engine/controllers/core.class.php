<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Core implements CoreInterfaceController {

    protected $database;
    
    public function __construct(){
        $this->database = new Database();
    }
    
    public function defaultInit() {
        
    }

    public function view() {
        
    }

}
