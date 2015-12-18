<?php

/* 
* File con i loader delle classi del controllers
 */

$dir_controller = ENGINE_DIR . '/controllers/'; // Directory con i controllers

/* Interface */
require_once $dir_controller . 'core.interface.php';

/* Classes */
require_once $dir_controller . 'core.class.php'; // Serve per ereditarietà(Contiene numerosi metodi per le sottoclassi)
require_once $dir_controller . 'error.class.php';
require_once $dir_controller . 'index.class.php';


