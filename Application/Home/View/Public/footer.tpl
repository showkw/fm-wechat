<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>
</div>
<!-- 底部结束 -->
<!-- 背景切换开始 -->
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
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/l.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/m.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/n.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/o.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="__PUBLIC__/images/p.jpg" alt=""></div>
            <div class="swiper-slide"><span class="reset">初始化</span></div>
        </div>
    </div>
    <div class="bg-out"></div>
    <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
</div>
<!-- 背景切换结束 -->
<script src="__PUBLIC__/lib/layui/layui.js"></script>
<script src="__PUBLIC__/js/xadmin.js?ver={:time()}"></script>
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