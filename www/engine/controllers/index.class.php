<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Index extends Core implements CoreInterfaceController {

    public function __construct() {
        parent::__construct();
        $this->view();
    }

    public function defaultInit() {
        
    }

    public function reg() {
        $n = mt_rand(1, 1000);
        $arr = array(
            'login' => "admin454",
            'password' => md5("hahahaha" . $n),
            'email' => "prova" . $n . "@gmail.com",
        );
        try{
            $this->database->insert("users", $arr);
            echo 'reg';
        } catch (Exception $ex) {
            echo 'error';
            echo "</br>";
            echo $ex->getMessage();
        }
    }

    public function view() {
        $file = Template::getTemplate("main");
        $arr = array();
        $arr["%title%"] = "La pagina iniziale";
        $arr["%content%"] = "<p><b>Ciao Mondo!!!</b></p>";
        echo Template::getReplaceContent($arr, $file);
    }

}
