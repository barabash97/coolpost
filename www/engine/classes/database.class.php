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

    protected function query($query) {
        if (!empty($query)) {
            return $this->result_set = $this->mysqli->query($query);
        }
    }

    protected function insert($table_name, $data) {

        $table = $this->tableExists($table_name);

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

    protected function select($table_name, $rows = "*", $where = null, $order = null) {
        $table = $this->tableExists($table_name);
        $query = 'SELECT ' . $rows . ' FROM ' . $table . ' ';
        if ($where != null) {
            $query .= 'WHERE ' . $where . ' ';
        }
        if ($order != null) {
            $query .= 'ORDER BY ' . $order;
        }
        $this->query($query);
    }

    protected function tableExists($table) {
        if (!empty($table)) {
            $table = $this->config->db["db_prefix"] . $table;
        } else {
            return false;
        }
        $this->result_set = $this->query("SHOW TABLES FROM " . $this->config->db["db_name"] . " LIKE '" . $table . "'");
        if ($this->result_set) {
            if ($this->result_set->num_rows) {
                return $table;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    protected function __destruct() {
        if (is_object($this->result_set)) {
            $this->result_set->close();
        }
        $this->mysqli->close();
    }

}
