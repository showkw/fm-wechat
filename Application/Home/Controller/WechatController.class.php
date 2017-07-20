<?php
/*
+----------------------------------------------------------------------
| Project: Fm-Wechat
+----------------------------------------------------------------------
| File Name: WechatController.class.php
+----------------------------------------------------------------------
| Date: 2017/7/14 22:11
+----------------------------------------------------------------------
| Copyright (c) 2017 https://www.firesmi.com All rights reserved.
+----------------------------------------------------------------------
| Author: Showkw <showkw@163.com>
+----------------------------------------------------------------------
*/

namespace Home\Controller;

use Home\Controller\BaseController;

use Gaoming13\WechatPhpSdk\Wechat;
use Gaoming13\WechatPhpSdk\Api;

class WechatController extends  BaseController
{
    public function index()
    {
        //定义redis 缓存 存储令牌
        S(array(
            'type'=>'redis',
            'host'=>'localhost',
            'port'=>'6379',
            'prefix'=>'weChat_',
            'expire'=>0
        ));
        $weConfig = [
            'appId' => C('wechat.appId'),
            'token' => C('wechat.token'),
            'encodingAESKey'=> C('wechat.encodingAESkey'),
        ];

        $apiConfig = [
            'appId' => C('wechat.appId'),
            'appSecret'	=> C('wechat.appSecret'),
            'get_access_token' => function(){
                // 从redis获取缓存的access_token
                return S('wechat_token');
            },
            'save_access_token' => function($token) {
                // 保存access_token
                S('wechat_token', $token);
            }
        ];

        // wechat模块 - 处理用户发送的消息和回复消息
        $weChat = new Wechat($weConfig);

        // 获取微信消息
        $msg = $weChat->serve();
        // 回复文本消息
        if ($msg->MsgType == 'text' && $msg->Content == '你好') {
            $weChat->reply("你也好！ - 这是我回复的额！");
        } else {
            $weChat->reply("听不懂！ - 这是我回复的额！");
        }

        // api模块 - 包含各种系统主动发起的功能
        $api = new Api($apiConfig);

        // 主动发送
        // 主动发送图文消息
        $api->send($msg->FromUserName, array(
            'type' => 'news',
            'articles' => array(
                array(
                    'title' => '图文消息标题1',								//可选
                    'description' => '图文消息描述1',						//可选
                    'picurl' => 'http://me.diary8.com/data/img/demo1.jpg',	//可选
                    'url' => 'http://www.example.com/'						//可选
                ),
                array(
                    'title' => '图文消息标题2',
                    'description' => '图文消息描述2',
                    'picurl' => 'http://me.diary8.com/data/img/demo2.jpg',
                    'url' => 'http://www.example.com/'
                ),
                array(
                    'title' => '图文消息标题3',
                    'description' => '图文消息描述3',
                    'picurl' => 'http://me.diary8.com/data/img/demo3.jpg',
                    'url' => 'http://www.example.com/'
                )
            ),
            'kf_account' => 'test1@kftest'		// 可选(指定某个客服发送, 会显示这个客服的头像)
        ));
    }


}