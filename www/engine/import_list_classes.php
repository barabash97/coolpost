<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dir_class = ENGINE_DIR . '/classes/'; // Directory con i controllers

/* Config files */
require_once $dir_class . 'config.class.php';

/* Database files*/
require_once $dir_class . 'database.class.php';
require_once $dir_class . 'global_database.class.php';

/* Template files */
require_once $dir_class . 'template.class.php';