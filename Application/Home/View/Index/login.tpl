<!doctype html>
<html lang="en">
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
    <link rel="stylesheet" href="__PUBLIC__/lib/layui/css/layui.css?ver={:time()}" media="all"  />
    <link rel="stylesheet" href="__PUBLIC__/css/font.css" />
    <link rel="stylesheet" href="__PUBLIC__/css/xadmin.css?ver={:time()}" />
</head>
<body>
<div class="login-logo"><h1>FiresMi-weChat</h1></div>
<div class="login-box">
    <form class="layui-form layui-form-pane" action="">

        <h3>登录你的帐号</h3>
        <label class="login-title" for="username">帐号</label>
        <div class="layui-form-item">
            <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
            <div class="layui-input-inline login-inline">
                <input type="text" name="username" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <label class="login-title" for="password">密码</label>
        <div class="layui-form-item">
            <label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
            <div class="layui-input-inline login-inline">
                <input type="text" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-warning pull-right" lay-submit lay-filter="login"  type="submit">登录</button>
            <div class="forgot"><a href="#" class="forgot">忘记帐号或者密码</a></div>
        </div>
    </form>
</div>
<div class="bg-changer">
    <div class="swiper-container changer-list">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/a.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/b.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/c.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/d.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/e.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/f.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/g.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/h.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/i.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/j.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/k.jpg" alt=""></div>
            <div class="swiper-slide"><span class="reset">初始化</span></div>
        </div>
    </div>
    <div class="bg-out"></div>
    <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
</div>
<script>
    $(function  () {
        layui.use('form', function(){
            var form = layui.form();
            //监听提交
            form.on('submit(login)', function(data){
                layer.msg(JSON.stringify(data.field),function(){
                    location.href='{:U('Index/index')}'
                });
                return false;
            });
        });
    })

</script>
</body>
</html>