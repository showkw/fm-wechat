<?php
/*
+----------------------------------------------------------------------
| Project: Fm-Wechat
+----------------------------------------------------------------------
| File Name: SystemController.class.php
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

class SystemController extends BaseController
{
    public function index()
    {
        //查询数据库配置
        $data = M('wechat_config')->where(['id' => 1])->find();
        $this->assign('config', $data);
        if (is_pjax()) {
            $this->display();
        }elseif(IS_POST){
            $data = I('post.');
            $rules = [
                ['appid','/^wx[a-z0-9]+$/','请填写正确的AppId'],
                ['appsecret','/^[a-z0-9]+$/', '请填写正确的AppSecret'],
                ['token', '/^[\w]+$/','请填写正确的token'],
                ['encodingaeskey','/^[\w]+$/','请填写正确的Encoding AESKey'],
            ];

            $weChatConfig = M('wechat_config');
            if( !$weChatConfig->validate($rules)->create() ){
                $res['status'] = 2;
                $res['content'] = $weChatConfig->getError();
            }else{
                $re = $weChatConfig->where('id=1')->save($data);
                if( $re != false ){
                    $res['status'] = 6;
                    $res['content'] = '修改成功';
                }else{
                    $res['status'] = 2;
                    $res['content'] = '修改失败';
                }

            }
            $this->ajaxReturn($res);
        }else{
            layout(true);
            $this->display();
        }

    }

    public function pay()
    {
        if(is_pjax()){
            $this->display();
        }else{
            layout(true);
            $this->display();
        }

    }
}