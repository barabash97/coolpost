<?php

/*
 * COOLPOST CMS
 * GENERAL CONFIG 
 * barabash97@gmail.com
 */

class Config {
    
    /* Configurazione DATABASE */
    private $db_name = ""; 
    private $db_host = ""; 
    private $db_password = ""; 
    private $db_user = ""; 
    
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
