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
    <blockquote class="layui-elem-quote">
        注意：x-admin 1.1每个页面都可以独立设置一个背景主题，如果每个都设置会比较消耗本地的存储，如果想全部恢复，请重置。
    </blockquote>
    <blockquote class="layui-elem-quote">
        欢迎使用x-admin 后台模版！<span class="f-14">v1.0</span>官方交流群： 519492808
    </blockquote>
    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="default">信息统计</a></legend>
    </fieldset>
    <table class="layui-table">
        <thead>
        <tr>
            <th>统计</th>
            <th>资讯库</th>
            <th>图片库</th>
            <th>产品库</th>
            <th>用户</th>
            <th>管理员</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>总数</td>
            <td>92</td>
            <td>9</td>
            <td>0</td>
            <td>8</td>
            <td>20</td>
        </tr>
        <tr>
            <td>今日</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>昨日</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>本周</td>
            <td>2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>本月</td>
            <td>2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        </tbody>
    </table>
    <table class="layui-table">
        <thead>
        <tr>
            <th colspan="2" scope="col">服务器信息</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th width="30%">服务器计算机名</th>
            <td><span id="lbServerName">http://127.0.0.1/</span></td>
        </tr>
        <tr>
            <td>服务器IP地址</td>
            <td>192.168.1.1</td>
        </tr>
        <tr>
            <td>服务器域名</td>
            <td>x.xuebingsi.com</td>
        </tr>
        <tr>
            <td>服务器端口 </td>
            <td>80</td>
        </tr>
        <tr>
            <td>服务器IIS版本 </td>
            <td>Microsoft-IIS/6.0</td>
        </tr>
        <tr>
            <td>本文件所在文件夹 </td>
            <td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
        </tr>
        <tr>
            <td>服务器操作系统 </td>
            <td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
        </tr>
        <tr>
            <td>系统所在文件夹 </td>
            <td>C:\WINDOWS\system32</td>
        </tr>
        <tr>
            <td>服务器脚本超时时间 </td>
            <td>30000秒</td>
        </tr>
        <tr>
            <td>服务器的语言种类 </td>
            <td>Chinese (People's Republic of China)</td>
        </tr>
        <tr>
            <td>.NET Framework 版本 </td>
            <td>2.050727.3655</td>
        </tr>
        <tr>
            <td>服务器当前时间 </td>
            <td>2017-01-01 12:06:23</td>
        </tr>
        <tr>
            <td>服务器IE版本 </td>
            <td>6.0000</td>
        </tr>
        <tr>
            <td>服务器上次启动到现在已运行 </td>
            <td>7210分钟</td>
        </tr>
        <tr>
            <td>逻辑驱动器 </td>
            <td>C:\D:\</td>
        </tr>
        <tr>
            <td>CPU 总数 </td>
            <td>4</td>
        </tr>
        <tr>
            <td>CPU 类型 </td>
            <td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
        </tr>
        <tr>
            <td>虚拟内存 </td>
            <td>52480M</td>
        </tr>
        <tr>
            <td>当前程序占用内存 </td>
            <td>3.29M</td>
        </tr>
        <tr>
            <td>Asp.net所占内存 </td>
            <td>51.46M</td>
        </tr>
        <tr>
            <td>当前Session数量 </td>
            <td>8</td>
        </tr>
        <tr>
            <td>当前SessionID </td>
            <td>gznhpwmp34004345jz2q3l45</td>
        </tr>
        <tr>
            <td>当前系统用户名 </td>
            <td>NETWORK SERVICE</td>
        </tr>
        </tbody>
    </table>
    <!-- 右侧内容框架，更改从这里结束 -->
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