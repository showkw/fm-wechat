<?php
/*
+----------------------------------------------------------------------
| Project: Fm-Wechat
+----------------------------------------------------------------------
| File Name: BaseController.class.php
+----------------------------------------------------------------------
| Date: 2017/7/14 20:11
+----------------------------------------------------------------------
| Copyright (c) 2017 https://www.firesmi.com All rights reserved.
+----------------------------------------------------------------------
| Author: Showkw <showkw@163.com>
+----------------------------------------------------------------------
*/
namespace Home\Controller;

use Think\Controller;

class BaseController extends  Controller
{

    public function __construct()
    {
        parent::__construct();
        //加载插件
        include_once dirname(APP_PATH) . '/vendor/autoload.php';
    }
}