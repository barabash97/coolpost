<?php

/* 
 * COOLPOST CMS
 * FILE INIT SITE
 * barabash97@gmail.com
 * Pagina iniziale del sito
 */

define("COOLPOST", true); 
define("ROOT_DIR", dirname(__FILE__));
define("ENGINE_DIR", ROOT_DIR.'/engine');
require_once ENGINE_DIR.'/init.php';
require_once ENGINE_DIR . '/import_list_controllers.php';
new Init();

