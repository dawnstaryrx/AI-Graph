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
                                    <td class="am-text-middle"><?=$item['m_id']; ?></td>
                                    <td class="am-text-middle">
                                        <a href="<?= $item['logo'] ?>" title="点击查看大图" target="_blank">
                                            <img src="<?= $item['logo'] ?>"
                                                 width="50" height="50" alt="">
                                        </a>
                                    </td>
                                    <td class="am-text-middle">
                                        <p><span><?= $item['name'] ?></span></p>
                                    </td>
                                    <td class="am-text-middle">
                                        <p><span><?= $item['author'] ?></span></p>
                                    </td>
                                     <td class="am-text-middle">
                                        <p><span><?= $item['version'] ?></span></p>
                                        <?php if(isset($item['isupdate'])&&$item['isupdate']==true):?>
                                         <p><span style="color: red;">新版本:<?= $item['new_version'] ?></span></p>
                                        <?php endif;?>
                                    </td>
                                    <td class="am-text-middle">
                                       <?php if (!empty($item['type'])): foreach ($item['type'] as $item_supports): ?>
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
                                       <?php if (empty($item['type'])): ?>
                                            <span class="am-badge am-badge-success">
                                                                                  未知
                                           </span>
                                       <?php endif; ?>
                                    </td>
                                    <td class="am-text-middle">
                                    本地
                                    </td>
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">
                                         <?php if(isset($item['isupdate'])&&$item['isupdate']==true):?>
                                          <a href="<?= url('apps.dealer.apply/update',
                                            ['modules' => $item['identifie']]) ?>">
                                            <i class="am-icon-pencil"></i> 升级
                                        </a>
                                         <?php endif;?>
                                        <a href="javascript:void(0);"
                                                   class="item-delete tpl-table-black-operation-del"
                                                   data-id="<?= $item['m_id'] ?>">
                                                    <i class="am-icon-trash"></i> 卸载
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
<script>
$(function () {

    // 删除元素
    var url = "<?= url('apps.dealer.apply/uninstall') ?>";
    $('.item-delete').uninstall('m_id', url);

});
</script>

