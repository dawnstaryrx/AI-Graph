<?php

use app\common\enum\DeliveryType as DeliveryTypeEnum;

?>
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" method="post">
                    <div class="widget-body">
                        <fieldset>
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">模块设置</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label form-require">应用</label>
                                <div class="am-u-sm-9">
                                    <?php foreach ($list as $item): ?>
                                        <label class="am-checkbox-inline">
                                            <input type="checkbox" name="wxapp_modules[]"
                                                   value="<?= $item['identifie'] ?>" data-am-ucheck
                                                   <?= (in_array($item['identifie'], $check_list)) ? 'checked' : '' ?>>
                                            <?= $item['name'] ?>
                                        </label>
                                    <?php endforeach; ?>
                                    <div class="help-block">
                                        <small>注：选中才能使用</small>
                                    </div>
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
