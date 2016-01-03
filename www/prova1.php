<?php 

if (isset($url[2])) {
            $controller->$url[1]($url[2]);
        } else {
            if (isset($url[1])) {

                $controller->$url[1]();
            } else {
                $controller->defaultInit();
            }
        }