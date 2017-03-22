<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 2017/3/22
 * Time: 9:54
 */

namespace event;


class Event
{
    public static function beforeThinkRequire(){
        echo 123465;
        exit();
    }

    public static function afterThinkRequire(){
        var_dump(D());
    }
}