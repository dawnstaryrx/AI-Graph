<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" enctype="multipart/form-data" method="post">
                    <div class="widget-body">
                        <fieldset>
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">平台设置</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label form-require">
                                    AppID <span class="tpl-form-line-small-title">平台名字</span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" name="wxapp[name]"
                                           value="" required>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-2 am-form-label form-require"> 平台类型 </label>
                                <div class="am-u-sm-10">
                                    <label class="am-radio-inline">
                                        <input type="radio" name="wxapp[type]"
                                               value="0" data-am-ucheck checked>
                                        微信公共平台
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="wxapp[type]"
                                               value="1" data-am-ucheck>
                            微信小程序
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="wxapp[type]"
                                               value="2" data-am-ucheck>
                            抖音小程序
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="wxapp[type]"
                                               value="3" data-am-ucheck>
                App
                                    </label>
                                    <div class="help-block am-padding-top-xs">
                                        <small>每个小程序对应接口参数不一致</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label form-require">
                                    AppID <span class="tpl-form-line-small-title">小程序ID</span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" name="wxapp[app_id]"
                                           value="" required>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label form-require">
                                    AppSecret <span class="tpl-form-line-small-title">小程序密钥</span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input type="password" class="tpl-form-input" name="wxapp[app_secret]"
                                           value="" required>
                                </div>
                            </div>
                            <div class="widget-head am-cf" style="display:none">
                                <div class="widget-title am-fl">微信支付设置</div>
                            </div>
                            <div class="am-form-group"  style="display:none">
                                <label class="am-u-sm-3 am-form-label form-require">
                                    微信支付商户号 <span class="tpl-form-line-small-title">MCHID</span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" name="wxapp[mchid]"
                                           value="">
                                </div>
                            </div>
                            <div class="am-form-group"  style="display:none">
                                <label class="am-u-sm-3 am-form-label form-require">
                                    微信支付密钥 <span class="tpl-form-line-small-title">APIKEY</span>
                                </label>
                                <div class="am-u-sm-9">
                                    <input type="password" class="tpl-form-input" name="wxapp[apikey]"
                                           value="">
                                </div>
                            </div>
                            <div class="am-form-group am-padding-top"  style="display:none">
                                <label class="am-u-sm-3 am-form-label">
                                    apiclient_cert.pem
                                </label>
                                <div class="am-u-sm-9">
                                     <textarea rows="6" name="wxapp[cert_pem]"
                                               placeholder="使用文本编辑器打开apiclient_cert.pem文件，将文件的全部内容复制进来"></textarea>
                                    <small>使用文本编辑器打开apiclient_cert.pem文件，将文件的全部内容复制进来</small>
                                </div>
                            </div>
                            <div class="am-form-group"  style="display:none">
                                <label class="am-u-sm-3 am-form-label">
                                    apiclient_key.pem
                                </label>
                                <div class="am-u-sm-9">
                                     <textarea rows="6" name="wxapp[key_pem]"
                                               placeholder="使用文本编辑器打开apiclient_key.pem文件，将文件的全部内容复制进来"></textarea>
                                    <small>使用文本编辑器打开apiclient_key.pem文件，将文件的全部内容复制进来</small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3 am-margin-top-lg">
                                    <button type="submit" class="j-submit am-btn am-btn-secondary">提交
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {

        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm();

    });
</script>
