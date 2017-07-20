<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.js"></script>
    <link rel="stylesheet" href="/Public/lib/layui/css/layui.css?ver=<?php echo time();?>" media="all"  />
    <link rel="stylesheet" href="/Public/css/font.css" />
    <link rel="stylesheet" href="/Public/css/xadmin.css?ver=<?php echo time();?>" />
    
</head>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="./index.html">FiresMi</a></div>
    <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="">个人信息</a></dd>
                <dd><a href="">切换帐号</a></dd>
                <dd><a href="./login.html">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="/">前台首页</a></li>
    </ul>
</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<div class="wrapper">
    <!-- 左侧菜单开始 -->
    <div class="left-nav">
        <div id="side-nav">
    <ul id="nav">
        <li class="list" current>
            <a href="./index.html">
                <i class="iconfont">&#xe761;</i>
                欢迎页面
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
        </li>
        <li class="list">
            <a href="javascript:;">
                <i class="iconfont">&#xe70b;</i>
                微信对接管理
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?php echo U('/System/index');?>" class="pjax">
                        <i class="iconfont">&#xe6a7;</i>
                        微信接口设置
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('/System/pay');?>" class="pjax">
                        <i class="iconfont">&#xe6a7;</i>
                        微信支付设置
                    </a>
                </li>
                <li>
                    <a href="member-level.html">
                        <i class="iconfont">&#xe6a7;</i>
                        等级管理
                    </a>
                </li>
                <li>
                    <a href="member-kiss.html">
                        <i class="iconfont">&#xe6a7;</i>
                        积分管理
                    </a>
                </li>
                <li>
                    <a href="member-view.html">
                        <i class="iconfont">&#xe6a7;</i>
                        浏览记录
                    </a>
                </li>
            </ul>
        </li>
        <li class="list" >
            <a href="javascript:;">
                <i class="iconfont">&#xe6a3;</i>
                分类管理
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="./category.html">
                        <i class="iconfont">&#xe6a7;</i>
                        分类列表
                    </a>
                </li>
            </ul>
        </li>
        <li class="list" >
            <a href="javascript:;">
                <i class="iconfont">&#xe6a3;</i>
                轮播管理
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu" style="display:none">
                <li>
                    <a href="./banner-list.html">
                        <i class="iconfont">&#xe6a7;</i>
                        轮播列表
                    </a>
                </li>
            </ul>
        </li>
        <li class="list" >
            <a href="javascript:;">
                <i class="iconfont">&#xe6a3;</i>
                管理员管理
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu" style="display:none">
                <li>
                    <a href="./banner-list.html">
                        <i class="iconfont">&#xe6a7;</i>
                        轮播列表
                    </a>
                </li>
            </ul>
        </li>
        <li class="list" >
            <a href="javascript:;">
                <i class="iconfont">&#xe6a3;</i>
                系统统计
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu" style="display:none">
                <li>
                    <a href="./echarts1.html">
                        <i class="iconfont">&#xe6a7;</i>
                        拆线图
                    </a>
                </li>
                <li>
                    <a href="./echarts2.html">
                        <i class="iconfont">&#xe6a7;</i>
                        柱状图
                    </a>
                </li>
                <li>
                    <a href="./echarts3.html">
                        <i class="iconfont">&#xe6a7;</i>
                        地图
                    </a>
                </li>
                <li>
                    <a href="./echarts4.html">
                        <i class="iconfont">&#xe6a7;</i>
                        饼图
                    </a>
                </li>
                <li>
                    <a href="./echarts5.html">
                        <i class="iconfont">&#xe6a7;</i>
                        k线图
                    </a>
                </li>
                <li>
                    <a href="./echarts6.html">
                        <i class="iconfont">&#xe6a7;</i>
                        仪表图
                    </a>
                </li>
                <li>
                    <a href="http://echarts.baidu.com/examples.html">
                        <i class="iconfont">&#xe6a7;</i>
                        更多案例
                    </a>
                </li>
            </ul>
        </li>
        <li class="list" >
            <a href="javascript:;">
                <i class="iconfont">&#xe6a3;</i>
                系统设置
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu" style="display:none">
                <li>
                    <a href="./banner-list.html">
                        <i class="iconfont">&#xe6a7;</i>
                        轮播列表
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
    </div>
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="content" id="pjax-content">
            <!-- 右侧内容框架，更改从这里开始 -->
             <!-- 右侧内容框架，更改从这里开始 -->
    <xblock>
    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="default">微信设置</a></legend>
    </fieldset>
    </xblock>
    <xblock>
        <form class="layui-form" id="form">
            <div class="layui-form-item">
                <label for="level-id" class="layui-form-label">
                URL (服务器地址)
                </label>
                <div class="layui-input-block">
                    <input type="text" readonly value="http://<?php echo ($_SERVER['HTTP_HOST']); echo U('/Wechat/index');?>" class="layui-input">
                    <p class="input-help">
                        请复制此URL地址填写在公众号平台 [ 开发 >> 基本配置 ] 中 [ URL ( 服务器地址 ) ]
                        <br>
                        注意：URL主域名必需备案，微信服务接口只支持 80 端口 ( http ) 和 443 端口 ( https )
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="appId" class="layui-form-label">
                    AppID (应用ID)<span class="x-red">*</span>
                </label>
                <div class="layui-input-block">
                    <input type="text" id="appid" name="appid" required="" lay-verify="required"
                           autocomplete="off" value="<?php echo ($config['appid']); ?>" class="layui-input">
                    <p class="input-help">
                        公众号应用ID是所有接口必要参数，可以在公众号平台 [ 开发 >> 基本配置 ] 页面获取。
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="level-kiss" class="layui-form-label">
                    AppSecret (应用密钥)<span class="x-red">*</span>
                </label>
                <div class="layui-input-block">
                    <input type="text" id="appsecret" name="appsecret" required="" value="<?php echo ($config['appsecret']); ?>" lay-verify="required" autocomplete="off" class="layui-input">
                    <p class="input-help">
                        公众号应用密钥是所有接口必要参数，可以在公众号平台 [ 开发 >> 基本配置 ] 页面授权后获取。
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="level-kiss" class="layui-form-label">
                    Token (令牌)<span class="x-red">*</span>
                </label>
                <div class="layui-input-block">
                    <input type="text" id="token" name="token" required="" value="<?php echo ($config['token']); ?>" lay-verify="required" autocomplete="off" class="layui-input">
                    <p class="input-help">
                        公众号平台与系统对接认证Token，请优先填写此参数并保存，然后再在微信公众号平台操作对接。
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="level-kiss" class="layui-form-label">
                    Encoding AESKey
                </label>
                <div class="layui-input-block">
                    <input type="text" id="encodingaeskey" name="encodingaeskey" required="" value="<?php echo ($config['encodingaeskey']); ?>" lay-verify="required" autocomplete="off" class="layui-input">
                    <p class="input-help">
                        公众号平台接口设置为加密模式，消息加密密钥必需填写并保持与公众号平台一致。
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label">
                </label>
                <button  class="layui-btn" lay-filter="save" lay-submit="">
                    保存
                </button>
            </div>
        </form>
    </xblock>
    <!-- 右侧内容框架，更改从这里结束 -->
    <script>
        layui.use(['form','layer'], function(){
            var form = layui.form(),
                layer = layui.layer;
                var index;
            //序列化表单值 用于判断是否被修改过
            var loadFormData = $('form#form').serialize();
            form.on('submit(save)', function(data){
                var submitFormData = $('form#form').serialize();
                if( loadFormData == submitFormData ){
                    layer.msg('您什么都没修改呀!', {icon:3,time:1000,anim: Math.ceil(Math.random() * 6)});
                }else{
                    var index = layer.load();
                    $.ajax({
                        url:'',
                        type:'post',
                        data: data.field,
                        success:function(res){
                            layer.close(index);
                            layer.msg(res.content,{icon:res.status,time:1000,anim: Math.ceil(Math.random() * 6)});
                        }
                    });
                }

                return false;
            });
        });
    </script>
            <!-- 右侧内容框架，更改从这里结束 -->
        </div>
    </div>
    <!-- 右侧主体结束 -->
</div>
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>
</div>
<!-- 底部结束 -->
<!-- 背景切换开始 -->
<div class="bg-changer">
    <div class="swiper-container changer-list">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="item" src="/Public/images/a.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/b.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/c.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/d.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/e.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/f.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/g.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/h.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/i.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/j.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/k.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/l.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/m.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/n.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/o.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/Public/images/p.jpg" alt=""></div>
            <div class="swiper-slide"><span class="reset">初始化</span></div>
        </div>
    </div>
    <div class="bg-out"></div>
    <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
</div>
<!-- 背景切换结束 -->
<script src="/Public/lib/layui/layui.js"></script>
<script src="/Public/js/xadmin.js?ver=<?php echo time();?>"></script>
<script>

    var pjaxdiv = '#pjax-content';
    $(document).pjax('#nav a', pjaxdiv)
    $(document).on('pjax:send', function() {
        $(pjaxdiv).fadeOut('slow')
    })
    $(document).on('pjax:complete', function() {
        $(pjaxdiv).fadeIn('slow')
    })
    layui.use(['form','upload','layer'],function(){
        var form = layui.form(),
            layer = layui.layer;
        layui.upload();

    });
</script>
</body>
</html>