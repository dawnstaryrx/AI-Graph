<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-cf">平台管理</div>
                </div>
                <div class="widget-body am-fr">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                        <div class="am-form-group">
                            <div class="am-btn-toolbar">
                                  <?php if (checkPrivilege('store.wxapp/add')): ?>
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a class="am-btn am-btn-default am-btn-success am-radius"
                                           href="<?= url('add') ?>">
                                            <span class="am-icon-plus"></span> 新增
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="am-scrollable-horizontal am-u-sm-12">
                        <table width="100%" class="am-table am-table-compact am-table-striped
                         tpl-table-black am-text-nowrap">
                            <thead>
                            <tr>
                                <th>应用ID</th>
                                <th>平台</th>
                                <th>状态</th>
                                <th>添加时间</th>
                                <th>更新时间</th>
                                <th>
								<?php if (checkPrivilege('store.wxapp/add')): ?>
                                              
操作

                                            <?php endif; ?>
								
								</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!$list['list']->isEmpty()): foreach ($list['list'] as $item): ?>
                                <tr>
                                    <td class="am-text-middle"><?= $item['wxapp_id'] ?></td>
                               
                                    <td class="am-text-middle">
                                        <p class="item-title"
                                           style="max-width: 400px;"><?= $item['name'] ?></p>
                                    </td>
                                 
                                  
                                    <td class="am-text-middle">
                                           <span class="am-badge am-badge-<?= $item['is_delete'] ? 'success' : 'warning' ?>">
                                               <?= $item['is_delete'] ? '删除' : '正常' ?>
                                           </span>
                                    </td>
                                    <td class="am-text-middle"><?= $item['create_time'] ?></td>
                                    <td class="am-text-middle"><?= $item['update_time'] ?></td>
                                    <td class="am-text-middle">
   <div class="tpl-table-black-operation" >
                                            <?php if (checkPrivilege('store.wxapp/add')): ?>
                                            <!---->
												<a style='border:none;background-color:#eb0000;color:#ffffff' href="<?= url('home',
                                                    ['uniacid' => $item['wxapp_id']]) ?>" >
                                                                                            绑定应用
                                                </a>


                                            <?php endif; ?>
                                            <?php if (checkPrivilege('edit')): ?>
                                                <a href="<?= url('edit',
                                                    ['wxapp_id' => $item['wxapp_id']]) ?>">
                                                    <i class="am-icon-pencil"></i> 编辑
                                                </a>
                                            <?php endif; ?>
                                            <?php if (checkPrivilege('delete')): ?>
                                                <a href="javascript:void(0);"
                                                   class="item-delete tpl-table-black-operation-del"
                                                   data-id="<?= $item['wxapp_id'] ?>">
                                                    <i class="am-icon-trash"></i> 删除
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
								
<?php if (!checkPrivilege('edit')): ?>	
								
<tr><td  colspan="6" style="font-weight :900">

<?php $opkid=$item['wxapp_id']; ?>

选择要管理的应用：</td></tr>	
<tr><td  colspan="6">

<?php if (!$list['mlist']->isEmpty()): foreach ($list['mlist'] as $item): ?>
<?php echo "<div style='width:200px;height:200px;float:left;margin:15px'>

<div><div style='width:180px;text-align:center;margin-bottom:10px'>".$item['name']."</div>
<div class='am-badge am-badge-warning' style='position:absolute;border-radius:5px'>点击管理</div>
<a href='index.php?s=/store/wxapp/home/uniacid/".$opkid."/appname/".$item['identifie']."' style='clear:left;margin-right:20px;border-radius:10px;font-size:15px'><img src='/addons/".$item['identifie']."/icon.jpg' style='width:180px;height:180px;border-radius:20px' /></a></div>
</div>"; ?>
<?php endforeach; else: ?>
<?php endif;?>


</td></tr>
<?php endif; ?>
                        
                               
								
                            <?php endforeach; else: ?>    <tr>     <td colspan="10" class="am-text-center">暂无记录</td>
                                </tr>
                            <?php endif; ?>

							
                            </tbody>
                        </table>
                    </div>
                    <div class="am-u-lg-12 am-cf">
                        <div class="am-fr"><?= $list['list']->render() ?> </div>
                        <div class="am-fr pagination-total am-margin-right">
                            <div class="am-vertical-align-middle">总记录：<?= $list['list']->total() ?></div>
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
        var url = "<?= url('delete') ?>";
        $('.item-delete').delete('wxapp_id', url);

    });
</script>

