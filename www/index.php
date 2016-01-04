<?php

/*
 * COOLPOST CMS
 * FILE INIT SITE
 * barabash97@gmail.com
 * Pagina iniziale del sito
 */



/* Init cons */
define("COOLPOST", true);
define("ROOT_DIR", dirname(__FILE__));
define("ENGINE_DIR", ROOT_DIR . '/engine');

/* Include & Require files*/

require_once ENGINE_DIR . '/init.php';
require_once ENGINE_DIR . '/import_list_interfaces.php';
require_once ENGINE_DIR . '/import_list_classes.php';
require_once ENGINE_DIR . '/import_lang_site.php';
require_once ENGINE_DIR . '/import_list_controllers.php';

/* LOAD ROUTER */
new Init();

