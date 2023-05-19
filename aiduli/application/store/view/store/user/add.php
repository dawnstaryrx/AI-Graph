<?php 
include_once("extend/we/framework/function/pdo.php");
$wxapplist=pdo_getAll( 'wxapp', array('is_delete'=>0) );

?>

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" method="post">
                    <div class="widget-body">
                        <fieldset>
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">添加管理员</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">用户名 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <input type="text" class="tpl-form-input" name="user[user_name]"
                                           value="" placeholder="请输入用户名" required>
                                </div>
                            </div>
                            <div class="am-form-group" style="display:none">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">所属角色 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <select name="user[role_id][]" multiple data-am-selected="{btnSize: 'sm'}">
									 <option value="1" selected>超级管理员</option>
                                      
                                    </select>
                                    <div class="help-block">
                                        <small>注：支持多选</small>
                                    </div>
                                </div>
                            </div>

							  <div class="am-form-group" style="">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">所属平台 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <select name="user[wxapp_id][]"  data-am-selected="{btnSize: 'sm'}">

									 <?php if (isset($wxapplist)): foreach ($wxapplist as $item_wxapp): ?>
                                            <option value="<?= $item_wxapp['wxapp_id'] ?>"> <?= $item_wxapp['name'] ?></option>
                                        <?php endforeach; endif; ?>

                                      
                                    </select>

									 注意：填写后不可更改
                                    <div class="help-block">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">登录密码 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <input type="password" class="tpl-form-input" name="user[password]"
                                           value="" placeholder="请输入登录密码" required>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">确认密码 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <input type="password" class="tpl-form-input" name="user[password_confirm]"
                                           value="" placeholder="请输入确认密码" required>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label">姓名 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <input type="text" class="tpl-form-input" name="user[real_name]"
                                           value="">
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
