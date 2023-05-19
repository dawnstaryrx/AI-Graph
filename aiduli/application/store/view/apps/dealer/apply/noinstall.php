<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-cf">应用安装列表</div>
                </div>
                <div class="widget-body am-fr">
                    <!-- 工具栏 -->
                    <div class="page_toolbar am-margin-bottom-xs am-cf">
                        <form class="toolbar-form" action="">
                            <input type="hidden" name="s" value="/<?= $request->pathinfo() ?>">
                            <div class="am-u-sm-12 am-u-md-9 am-u-sm-push-3">
                                <div class="am fr">
                                    <div class="am-form-group am-fl">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form">
                                            <input type="text" class="am-form-field" name="search"
                                                   placeholder="请输入应用名字"
                                                   value="<?= $request->get('search') ?>">
                                            <div class="am-input-group-btn">
                                                <button class="am-btn am-btn-default am-icon-search"
                                                        type="submit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="am-scrollable-horizontal am-u-sm-12 am-padding-bottom-lg">
                        <table width="100%" class="am-table am-table-compact am-table-striped
                         tpl-table-black am-text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>封面</th>
                                <th>应用</th>
                                <th>作者</th>
                                <th>版本</th>
                                <th>
                                                                 类型
                                </th>
                                <th>来源</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($list)): foreach ($list as $k=>$item): ?>
                                <tr>
                                    <td class="am-text-middle"><?= $k++; ?></td>
                                    <td class="am-text-middle">
                                        <a href="<?= $item['application']['logo'] ?>" title="点击查看大图" target="_blank">
                                            <img src="<?= $item['application']['logo'] ?>"
                                                 width="50" height="50" alt="">
                                        </a>
                                    </td>
                                    <td class="am-text-middle">
                                        <p><span><?= $item['application']['name'] ?></span></p>
                                    </td>
                                    <td class="am-text-middle">
                                        <p><span><?= $item['application']['author'] ?></span></p>
                                    </td>
                                     <td class="am-text-middle">
                                        <p><span><?= $item['application']['version'] ?></span></p>
                                    </td>
                                    <td class="am-text-middle">
                                       <?php if (!empty($item['platform']['supports'])): foreach ($item['platform']['supports'] as $item_supports): ?>
                                          <?php if ($item_supports=='app'): ?>
                                            <span class="am-badge am-badge-success">
                                                                                  微信公共平台
                                           </span>
                                           <?php endif; ?>
                                            <?php if ($item_supports=='wxapp'): ?>
                                            <span class="am-badge am-badge-warning">
                                                                                  微信小程序
                                           </span>
                                           <?php endif; ?>
                                            <?php if ($item_supports=='douapp'): ?>
                                            <span class="am-badge am-badge-success">
                                                                                  抖音小程序
                                           </span>
                                           <?php endif; ?>
                                       <?php endforeach;endif; ?>
                                    </td>
                                    <td class="am-text-middle">
                                    本地
                                    </td>
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">
                                        <a href="<?= url('apps.dealer.apply/install',
                                            ['modules' => $item['application']['identifie']]) ?>">
                                            <i class="am-icon-pencil"></i> 安装
                                        </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; else: ?>
                                <tr>
                                    <td colspan="9" class="am-text-center">暂无应用</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="am-u-lg-12 am-cf">
                            <div class="am-fr"> </div>
                            <div class="am-fr pagination-total am-margin-right">
                                <div class="am-vertical-align-middle">总记录：<?=count($list) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 分销商审核 -->
<script id="tpl-dealer-apply" type="text/template">
    <div class="am-padding-top-sm">
        <form class="form-dealer-apply am-form tpl-form-line-form" method="post"
              action="<?= url('apps.dealer.apply/submit') ?>">
            <input type="hidden" name="apply_id" value="{{ id }}">
            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label"> 审核状态 </label>
                <div class="am-u-sm-9">
                    <label class="am-radio-inline">
                        <input type="radio" name="apply[apply_status]" value="20" data-am-ucheck
                               checked> 审核通过
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" name="apply[apply_status]" value="30" data-am-ucheck> 驳回
                    </label>
                </div>
            </div>
            <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label"> 驳回原因 </label>
                <div class="am-u-sm-9">
                    <input type="text" class="tpl-form-input" name="apply[reject_reason]" placeholder="仅在驳回时填写"
                           value="">
                </div>
            </div>
        </form>
    </div>
</script>

<script>
    $(function () {

        /**
         * 审核操作
         */
        $('.j-audit').click(function () {
            var $this = $(this);
            layer.open({
                type: 1
                , title: '分销商审核'
                , area: '340px'
                , offset: 'auto'
                , anim: 1
                , closeBtn: 1
                , shade: 0.3
                , btn: ['确定', '取消']
                , content: template('tpl-dealer-apply', $this.data())
                , success: function (layero) {
                    // 注册radio组件
                    layero.find('input[type=radio]').uCheck();
                }
                , yes: function (index, layero) {
                    // 表单提交
                    layero.find('.form-dealer-apply').ajaxSubmit({
                        type: 'post',
                        dataType: 'json',
                        success: function (result) {
                            result.code === 1 ? $.show_success(result.msg, result.url)
                                : $.show_error(result.msg);
                        }
                    });
                    layer.close(index);
                }
            });
        });

        /**
         * 显示驳回原因
         */
        $('.j-show-reason').click(function () {
            var $this = $(this);
            layer.alert($this.data('reason'), {title: '驳回原因'});
        });

    });
</script>

