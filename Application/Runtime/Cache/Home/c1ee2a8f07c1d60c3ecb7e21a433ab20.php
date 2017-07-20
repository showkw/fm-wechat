<?php if (!defined('THINK_PATH')) exit();?> <!-- 右侧内容框架，更改从这里开始 -->
    <xblock>
        <fieldset class="layui-elem-field layui-field-title site-title">
            <legend><a name="default">微信支付设置</a></legend>
        </fieldset>
    </xblock>
    <xblock>
        <form class="layui-form">
            <div class="layui-form-item">
                <label for="level-id" class="layui-form-label">
                    MCH_ID (商户ID)<span class="x-red">*</span>
                </label>
                <div class="layui-input-block">
                    <input type="text" id="level-id" name="level-id" disabled="" value="20" class="layui-input">
                    <p class="input-help">
                        注意：商户ID必需与微信接口配置公众号APPID对应，否则无法使用支付功能！
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="level-name" class="layui-form-label">
                    PartnerKey (商户密钥)<span class="x-red">*</span>
                </label>
                <div class="layui-input-block">
                    <input type="text" id="level-name" name="level-name" required="" lay-verify="required"
                           autocomplete="off" value="" class="layui-input">
                    <p class="input-help">
                        微信支付商户密钥需要在商户平台配置，必需填写密钥之后才能正常使用微信支付功能。
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="level-kiss" class="layui-form-label">
                    Apiclient (双向证书)<span class="x-red">*</span>
                </label>
                <div class="layui-input-block">
                    <input type="file" name="Apiclient" lay-title="请上传 apiclient_key.pem" class="layui-upload-file">
                    <input type="file" name="Apiclient" lay-title="请上传 apiclient_cert.pem" class="layui-upload-file">
                    <p class="input-help">
                        公众号应用密钥是所有接口必要参数，可以在公众号平台 [ 开发 >> 基本配置 ] 页面授权后获取。
                    </p>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label">
                </label>
                <button  class="layui-btn" lay-filter="save" lay-submit="">保存</button>
            </div>
        </form>
    </xblock>
    <!-- 右侧内容框架，更改从这里结束 -->