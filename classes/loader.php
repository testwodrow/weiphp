<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 2017/3/20
 * Time: 20:05
 */

spl_autoload_register(function($classname){
    $_file = SITE_PATH."/classes/" . str_replace('\\','/',$classname) . '.php';
    if(file_exists($_file)){
        require_once $_file;
    }
});