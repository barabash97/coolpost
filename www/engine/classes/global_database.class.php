<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class GlobalDatabase {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function insert($table_name, $data) {
        return $this->db->insert($table_name, $data);
    }

    public function select($table_name, $rows = "*", $where = null, $order = null) {
        return $this->db->select($table_name, $rows, $where, $order);
    }
    
    public function deleteRows($table_name, $where = null){
        return $this->db->deleteRows($table_name, $where);
    }
    
    public function deleteTable($table_name){
        return $this->db->deleteTable($table_name);
    }
    
    public function update($table_name, $data = null, $where = null){
        return $this->db->update($table_name, $data, $where);
    }
    
    public function query($query) {
        $this->db->query($query);
        return $this->db->getResultSet();
    }

}
