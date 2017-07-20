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

namespace Showkw\wechat\build;

use Showkw\wechat\bulid\weChat;

class Base extends Error
{
    public function __construct()
    {
       //
        echo weChat::valid();
    }


}