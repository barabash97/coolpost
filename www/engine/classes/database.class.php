<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database {

    private $mysqli;
    private $config;
    private $result_set;

    public function __construct() {
        $this->config = new Config();
        $this->mysqli = new mysqli(
                $this->config->db["db_host"], $this->config->db["db_user"], $this->config->db["db_password"], $this->config->db["db_name"]
        );
    }

    private function query($query) {
        if (!empty($query)) {
            return $this->result_set = $this->mysqli->query($query);
        }
    }

    public function insert($table, $data) {
        if (!empty($table)) {
            $table = $this->config->db["db_prefix"] . $table;
        } else {
            return false;
        }
        if (empty($data)) {
            return false;
        }
        $query = 'INSERT INTO ' . $table . ' (';
        $str_column = '';
        $str_values = '';
        foreach ($data as $key => $value) {
            $str_column .= $key . ',';
            $str_values .= '\'' . $value . '\',';
        }
        $str_column2 = substr($str_column, 0, -1);
        $str_values2 = substr($str_values, 0, -1);
        $query .= $str_column2 . ') VALUES (' . $str_values2 . ')';
        $this->query($query);
    }

    public function __destruct() {
        if (is_object($this->result_set)) {
            $this->result_set->close();
        }
        $this->mysqli->close();
    }

}
