<?php

/* 
*Importare i file per gestire la lingua di rappresentazione sul sito
 */

function selectDefaultLanguages(){
    $default = Config::$default_lang_site;
    if(isset($_SESSION["default_languages_website"])){
        $default = $_SESSION["default_languages_website"];
    }
    return $default;
}

require_once ROOT_DIR . '/languages/'.  selectDefaultLanguages() . '/website.lng';


