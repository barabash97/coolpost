<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Template {

    public function __construct() {
        
    }

    public static function getTemplate($name, $sub_dir = "", $default_tmpl = Config::DEFAULT_TEMPLATE) { //Return file template
        if (empty($sub_dir) || $sub_dir == "" ) {
            $url_tmpl = ROOT_DIR . '/template/' . $default_tmpl . '/' . $name . '.tpl'; 
        } else {
            $url_tmpl = ROOT_DIR . '/template/' . $default_tmpl . '/' . $sub_dir . '/' . $name . '.tpl'; //template/default/subdir/subdir
        }
        return $file = file_get_contents($url_tmpl);
    }

    public static function getReplaceContent($sr, $content) {
        $search = array();
        $replace = array();
        $i = 0;
        foreach ($sr as $key => $value) {
            $search[$i] = $key;
            $replace[$i] = $value;
            $i++;
        }
        return str_replace($search, $replace, $content);
    }

}
