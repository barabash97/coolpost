<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Article implements CoreInterface {

    public function view() {
        echo 'view';
    }

    public function defaultPage() {
        echo 'ARTICLE DEFAULT PAGE';
    }

}