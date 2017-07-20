<?php

/*
+----------------------------------------------------------------------
| Project: Fm-Wechat
+----------------------------------------------------------------------
| File Name: Base.php
+----------------------------------------------------------------------
| Date: 2017/7/17 10:11
+----------------------------------------------------------------------
| Copyright (c) 2017 https://www.firesmi.com All rights reserved.
+----------------------------------------------------------------------
| Author: Showkw <showkw@163.com>
+----------------------------------------------------------------------
*/

namespace Showkw\wechat;

class weChat
{
    //连接
    protected static $link;

    public function __call($method, $params)
    {
        if (is_null(self::$link)) {
            self::$link = new Base();
        }
        if (method_exists(self::$link, $method)) {
            return call_user_func_array([self::$link, $method], $params);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        static $link;
        if (is_null($link)) {
            $link = new static();
        }

        return call_user_func_array([$link, $name], $arguments);
    }
}