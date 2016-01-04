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
            if (!$this->controllerAllowed($url[0])) {
                $controller = Error::getInstance();
            } else {
                $controller = new $url[0];
            }
        } else if (empty($url[0])) {
            $controller = new Index();
        } else {
            $controller = Error::getInstance();
        }



        if (!empty($url[1]) && isset($url[1])) {
            if (!$this->methodAllowed($controller, $url[1])) {
                $controller = Error::getInstance();
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

    public function controllerAllowed($obj_name) {
        if (is_object($obj_name)) {
            $obj = (string) strtolower(get_class($obj_name));
        } else {
            $obj = $obj_name;
        }
        $array = MethodAllowed::$method_allowed;
        $flag = false;
        foreach ($array as $key => $value) {
            if ($obj == $key) {
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
