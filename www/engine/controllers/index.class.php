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
        
       $file = Template::getTemplate("main");
        $arr = array();
        $arr["%title%"] = "La pagina iniziale";
        $arr["%content%"] = "<p><b>Ciao Mondo!!!</b></p>";
        echo Template::getReplaceContent($arr, $file);
        
        
    }
    
    public function defaultPage() {
        parent::defaultPage();
    }
    
    public function getErrorPage() {
        parent::getErrorPage();
    }
    
    public function __destruct() {
        ;
    }

}
