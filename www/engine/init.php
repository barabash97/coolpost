<?php

/*
 * barabash97@gmail.com
 * Vladi Barabash
 */

class Init {

    public $array = array();

    public function __construct($url = "") {
        if (!defined('COOLPOST')) {
            die("ERROR HACK");
            exit;
        }
        $this->siteClose();
        if (!empty($_GET["url"])) {
            $url = $_GET["url"];
        }
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $file = ENGINE_DIR . '/controllers/' . $url[0] . '.class.php';
        if (file_exists($file)) {
            require_once $file;
        } else if (empty($url[0]) || $url[0] == "") {
            require_once ENGINE_DIR . '/controllers/index.class.php';
            exit;
        } else {
            require ENGINE_DIR . '/controllers/error.class.php';
            $controller = new Error();
            exit;
        }
        $controller = new $url[0];
        if (!empty($url[1]) && isset($url[1])) {
            if ($this->methodAllowed($controller, $url[1]) == false) {
                $controller->getErrorPage();
            } else {
                if (!empty($url[2])) {
                    $controller->$url[1]($url[2]);
                } else {
                       $controller->$url[1]();
                }
            }
        } else {
            $controller->defaultPage();
        }
    }

    public function methodAllowed($obj_name, $method_name) { //Return true o false
        $method = strtolower($method_name);
        $obj = (string) strtolower(get_class($obj_name));
        $flag = false;
        $array = MethodAllowed::$method_allowed[$obj];
        for ($i = 0; $i < count($array); $i++) {
            if ($method == $array[$i]) {
                $flag = true;
                
            }
        }
        return $flag;
    }

    public function siteClose() {
        if (Config::$site_allowed == false) {
            echo Template::getTemplate("site_close");
        }
    }

}
