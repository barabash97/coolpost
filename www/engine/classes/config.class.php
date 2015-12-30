<?php

/*
 * COOLPOST CMS
 * GENERAL CONFIG 
 * barabash97@gmail.com
 */

class Config {
    
    /* Configurazione DATABASE */
    public $db = array(
        'db_user' => "root",
        'db_password' => "",
        'db_host' => "localhost", 
        'db_name' => "coolpost",
        'db_prefix' => "cool_"
    );
    
    
    /* Configurazione generale del sito */
    public $title_site = 'Il mio sito web';
    const URL_SITE = 'http://coolpost.it/';
    public static $site_allowed = false; //Indica se il sito è aperto 
    public static $default_lang_site = "it";
    
    /* Template */
    const DIR_TEMPLATE = self::URL_SITE . 'template/';
    const DEFAULT_TEMPLATE = 'default';
    
    /* Post */
    public $post_to_page = 6;
    
}
