<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database {
    private $mysqli;
    private $config;
    private $result;
    public function __construct() {
        $this->config = new Config();
        $this->mysqli = new mysqli(
                $this->config->db_host,
                $this->config->db_user,
                $this->config->db_password,
                $this->config->db_name
                );
    }
    
    protected function query($query){
        if(!empty($query)){
           $this->result_set = $this->mysqli->query($query);
        }
    }
    
    public function __destruct() {
        if(!empty($this->result_set)){
            $this->result_set->close();
        }
        $this->mysqli->close();
        
    }
    
}

