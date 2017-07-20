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
                    <input type="text" readonly value="http://{$_SERVER['HTTP_HOST']}{:U('/Wechat/index')}" class="layui-input">
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
                           autocomplete="off" value="{$config['appid']}" class="layui-input">
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
                    <input type="text" id="appsecret" name="appsecret" required="" value="{$config['appsecret']}" lay-verify="required" autocomplete="off" class="layui-input">
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
                    <input type="text" id="token" name="token" required="" value="{$config['token']}" lay-verify="required" autocomplete="off" class="layui-input">
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
                    <input type="text" id="encodingaeskey" name="encodingaeskey" required="" value="{$config['encodingaeskey']}" lay-verify="required" autocomplete="off" class="layui-input">
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