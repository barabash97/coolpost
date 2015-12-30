<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class GlobalDatabase extends Database {

    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($table_name, $data){
        $this->insert($table_name, $data);
    }
    
    public function select($table_name, $rows = "*", $where = null, $order = null){
        $this->select($table_name, $rows, $where, $order);
    }
    
    

}
