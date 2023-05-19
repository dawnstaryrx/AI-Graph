<div class="page-home row-content am-cf" style="display:none">

    <!-- 商城统计 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf" style='display:none'>
                <div class="widget-head" style='display:none'>
                    <div class="widget-title">统计</div>
                </div>
                <div class="widget-body am-cf" style='display:none'>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__blue am-cf">
                            <div class="card-header">访问总量</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['views_total'] ?></div>
                                <div class="card-description">当前模块访问量</div>
                                <span class="card-icon iconfont icon-goods"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__red am-cf">
                            <div class="card-header">用户总量</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['user_total'] ?></div>
                                <div class="card-description">当前用户总数量</div>
                                <span class="card-icon iconfont icon-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__violet am-cf">
                            <div class="card-header">支付总量</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['pay_total'] ?></div>
                                <div class="card-description">已付款订单总金额</div>
                                <span class="card-icon iconfont icon-order"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__primary am-cf">
                            <div class="card-header">支付用户</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['comment_total'] ?></div>
                                <div class="card-description">已付款用户量</div>
                                <span class="card-icon iconfont icon-haoping2"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- 访问路径 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">点击左侧配置小程序</div>
                </div>
                <div class="widget-body am-cf">
                   <?php foreach ($data['coverlist'] as $item):?>
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-y-center">
                            <div class="outline-left">
                               <div class="qr" data-url="<?=$item['url'];?>"></div>
                            </div>
                            <div class="outline-right dis-flex flex-dir-column flex-x-between">
                                <div style="color: rgb(102, 102, 102); font-size: 1.3rem;"><?=$item['title']; ?></div>
                                <div class="js-copy" style="color: rgb(153, 153, 153); font-size: 1.2rem;" data-clipboard-text="<?=$item['url'];?>">
                                                            复制
                                 </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="assets/store/js/clipboard.min.js"></script>
<script type="text/javascript">

var patharr=(window.location.toString()).split('/')
 window.location.href="/index.php?s=/store/addons/run/module/"+patharr[patharr.length-1]+"/do/config";



      $(function(){
       $('.qr').each(function(){
    	    console.log($(this).data('url'));
    	    $(this).qrcode({
    	        render: "canvas",
    	        width: 70,
    	        height: 70,
    	        text: $(this).data('url')
    	    });
          });

       var clipboard = new Clipboard('.js-copy');

       clipboard.on('success', function(e) {
    	   $.show_success('复制成功');
       });
       /**
        * 近七日交易走势
        * @type {HTMLElement}
        */


      });





</script>