<?php
/*
+----------------------------------------------------------------------
| Project: Fm-Wechat
+----------------------------------------------------------------------
| File Name: IndexController.class.php
+----------------------------------------------------------------------
| Date: 2017/7/14 20:11
+----------------------------------------------------------------------
| Copyright (c) 2017 https://www.firesmi.com All rights reserved.
+----------------------------------------------------------------------
| Author: Showkw <showkw@163.com>
+----------------------------------------------------------------------
*/
namespace Home\Controller;
use Home\Controller\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        if( is_pjax() ){
            $this->display();
        }elseif(IS_GET){
            layout(true);
            $this->display();
        }

    }

    public function other()
    {
      echo 'other';
    }
}