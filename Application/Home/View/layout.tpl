<include file="Public/header" />
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
        <include file="Public/aside" />
    </div>
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="content" id="pjax-content">
            <!-- 右侧内容框架，更改从这里开始 -->
            {__CONTENT__}
            <!-- 右侧内容框架，更改从这里结束 -->
        </div>
    </div>
    <!-- 右侧主体结束 -->
</div>
<!-- 中部结束 -->
<include file="Public/footer" />