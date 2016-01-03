<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Core  {

    public $database;
    
    public function __construct(){
        $this->database = new GlobalDatabase();
    }
    
    public function defaultInit() {
        echo 'default core';
    }

    public function view() {
        echo 'default view core';
    }
    
    public function getErrorPage(){
        echo 'getErrorPage';
    }
    
    public function defaultPage() {
        echo 'default page!';
    }

}
