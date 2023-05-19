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
                                <div class="widget-title am-fl">系统信息</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label form-require"> 系统版本 </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" name="store[name]"
                                           value="<?= $version['version'];?>" readonly="readonly">
                                </div>
                            </div>
                             <?php if (!empty($list)):?>
                           <div class="am-form-group">
                                <table class="am-table">
                                      <thead>
                                        <tr>
                                          <th>ID</th>
                                          <th>路径</th>
                                          <th>权限</th>
                                          <th>时间</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php $i=1;?>
                                       <?php foreach ($list as $k=>$item): ?>
                                        <tr>
                                         <td><?= $i++; ?></td>
                                          <td><?= $k ?></td>
                                           <td <?php if($item['r_dir']<777):?> style="color: red;" <?php endif;?>><?=$item['r_dir'];?> <?php if($item['r_dir']<777):?> (权限不够) <?php endif;?></td>
                                          <td><?=$item['filemtime'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>

                                      </tbody>
                                    </table>
                            </div>
                          <?php endif;?>
                           <?php if (!empty($list)):?>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3 am-margin-top-lg">
                                    <button  type="submit" class="j-submit am-btn am-btn-secondary">升级系统
                                    </button>
                                </div>
                            </div>
                            <?php endif;?>
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
