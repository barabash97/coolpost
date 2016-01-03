<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Index extends Core implements CoreInterfaceController {

    public function __construct() {
        parent::__construct();
    }

    public function defaultInit() {
        
    }

    public function reg() {
        $n = mt_rand(1, 1000);
        $arr = array(
            'login' => "admin454111a222",
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
    
    public function select(){
       $result = $this->database->select("users", "*", null, array("id, login" => "ASC"));
       while($row = $result->fetch_assoc()){
           print_r($row);
           echo "</br>";
       }
    }

    public function view() {
        $file = Template::getTemplate("main");
        $arr = array();
        $arr["%title%"] = "La pagina iniziale";
        $arr["%content%"] = "<p><b>Ciao Mondo!!!</b></p>";
        echo Template::getReplaceContent($arr, $file);
    }
    
    public function __destruct() {
        ;
    }

}
