<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
  <title></title>

  <!-- 引入样式文件 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vant@2.9/lib/index.css">
  <link rel="stylesheet" href="/css/public.css">
  <link rel="stylesheet" href="/css/weui.css">
  <link rel="stylesheet" href="/css/weuix.css">
   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <!-- 自定义样式 -->
  <style>
    body {
      color: #333;
      background-color: #f8f8f8;
    }

    .goods {
      padding-bottom: 50px;
    }

    .goods-swipe img {
      width: 100%;
      display: block;
    }

    .goods-title {
      font-size: 16px;
    }

    .goods-price {
      color: #f44;
    }

    .goods-express {
      font-size: 12px;
      padding: 5px 15px;
    }

    .goods-cell-group {
      margin: 15px 0;
    }

    .goods-tag {
      margin-left: 5px;
    }
  </style>
  <style>
      .bottom-button {
        width: 160px;
        height: 40px;
      }
    </style>
</head>

<body>
  <div id="app">
<van-steps :active="active">
  <van-step>车辆停稳</van-step>
  <van-step>熄火收车</van-step>
  <van-step>确认支付</van-step>
  <van-step>交易完成</van-step>
</van-steps>
<div class="" style="width: 100%;height: 100%;" v-if="active==1">
   <img style="width: 100%;height: 100%;" alt="" src="http://yuncar.123.cn/assets/store/img/mobile/car.png">

</div>
<div class="" style="width: 100%;height: 100%;" v-if="active==2">
  <div class="weui-pay-m">
      <ul>
            <li class="weui-pay-order">
                <dl class="weui-pay-line">
                    <dd class="weui-pay-name"><?= $device['goods_name'] ?></dd>
                    <dt class="weui-pay-label">订 单 号：</dt><dd class="weui-pay-e">465464565665</dd>
                </dl>
                <dl class="weui-pay-line"><dt class="weui-pay-label">订单时间：</dt><dd class="weui-pay-e">2015年1月20日 12:20</dd></dl>
                <dl class="weui-pay-line"><dt class="weui-pay-label">应付金额：</dt><dd class="weui-pay-e" data-money="<?= $device['sku'][0]['goods_price'] ?>">￥{{money}}</dd></dl>
            </li>
        </ul>

    </div>
   <div class="shopList" @click="chooseCoupon">

		<div class="chooseCoupon" >
			<span>优惠券选择</span>
			<span>{{useMoney}}</span>
			<img class="shopLogo" src="http://yuncar.123.cn/assets/store/img/mobile/right.png" alt="">
		</div>
	</div>
</div>
<div id="coupon" :class="show?'coupon':'couponHide'">
		<div class="couponHeader">
			<input type="text" placeholder="请输入优惠码">
			<button>兑换</button>
		</div>
		<div class="choseType">
			<div class="chose">
				<span @click="switchType(0)">可使用优惠券({{couPonData.length}})</span>
				<span @click="switchType(1)">不可使用优惠券({{noCouPonData.length}})</span>
			</div>
			<div :class="transNum?'redBorder2':'redBorder'"></div>
		</div>
		<div style="height: 50%;overflow: scroll;min-height: 300px;">
			<div class="flexCol couponCard" v-for="(item,index) in dataObj" :key="index" @click="useCoupon(item.money,index+1,item.isUse)">
				<div v-if="item.isUse" class="flexRow couponCardHeader">
					<div class="flexCol money">
						<div class="sale">{{item.money}}元</div>
						<div class="word">{{item.useMessage}}</div>
					</div>
					<div class="flexCol date">
						<div class="title">{{item.name}}</div>
						<div class="word">有效期{{item.date}}</div>
					</div>
					<img v-show="yesClick == index+1" class="shopLogo" src="http://yuncar.123.cn/assets/store/img/mobile/yes.png" alt="">
				</div>
				<div v-else class="flexRow couponCardHeader">
					<div class="flexCol money">
						<div class="noSale">{{item.money}}元</div>
						<div class="word">{{item.useMessage}}</div>
					</div>
					<div class="flexCol date">
						<div class="noTitle">{{item.name}}</div>
						<div class="word">有效期{{item.date}}</div>
					</div>
				</div>
				<div class="couponMsg">
					{{item.msg}}
				</div>
			</div>
		</div>
	</div>
 <div style="margin: 16px;bottom: 0px;position: fixed;width: 94%;">
<van-button round  type="primary" block  @click="next">下一步</van-button>
</div>
  </div>

  <!-- 引入 Vue 和 Vant 的 JS 文件 -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vant@2.9/lib/vant.min.js"></script>

  <script >


    new Vue({
      el: '#app',

      data() {
        return {
       	 active: 1,
       	 money:<?= $device['sku'][0]['goods_price'] ?>,
         transNum:0,
         // 模拟优惠券信息
         couPonData:[
             {"name":'优惠券名称',"money":"1.5","useMessage":"无使用门槛","date":"2019.11.13-2020.01.20","msg":"描述的相关信息",'isUse':true},
             {"name":'优惠券名称',"money":"3","useMessage":"无使用门槛","date":"2019.11.13-2020.01.20","msg":"描述的相关信息",'isUse':true}
         ],
         // 模拟优惠券信息
         noCouPonData:[
             {"name":'优惠券名称',"money":"1.5","useMessage":"无使用门槛","date":"2019.11.13-2020.01.20","msg":"优惠券不可使用描述",'isUse':false}
         ],
         coupon_id:0,
         dataObj:[],
         show:false,
         ssid:<?= $device['goods_id'] ?>,
         useMoney:'',
         yesClick:null
        };
      },
      created(){
          this.dataObj = this.couPonData;
      },
      methods: {
        formatPrice() {
          return '¥' + (this.goods.price / 100).toFixed(2);
        },
        send(){
            axios({
               method:'get',
                url:'<?= url('coupon') ?>'
            }).then(function(res){
                console.log(res.data.name);
            });
        },
        switchType(val){
            this.transNum = val;
            switch (val) {
                case 0:
                    this.dataObj = this.couPonData;
                    break;
                case 1:
                    this.dataObj = this.noCouPonData;
                    break;
            }
        },
        chooseCoupon(){
            console.log(this.show);
            this.send();
            this.show = !this.show;
        },
        useCoupon(money,key,val){
            if(val){
                this.show = !this.show;
                this.yesClick = key;
                this.money = this.money-money < 0?0:this.money-money;
                this.useMoney = '-'+money+'元'
            }else{

            }

        },
        enterShop() {
          vant.Toast('进入店铺');
        },
        showList:function(){
       	     this.showList = false;
         },
        showGoodsDetail() {
          vant.Toast('查看商品详情');
        },

        showChat() {
          vant.Toast('进入客服页面');
        },

        showCart() {
          vant.Toast('进入购物车页面');
        },

        addCart() {
          vant.Toast('加入购物车');
        },
        next(){
          if(this.active==2){
                this.pay();
           }
       	  this.active = this.active+1;

        },
        pay(){
            var ssid = this.ssid;
            var money = this.money;
            var coupon_id = this.coupon_id;
        	axios({
                method:'post',
                url:'<?= url('order') ?>',
                data:{money:money,ssid:ssid,coupon_id:coupon_id},
             }).then(function(res){
                 console.log(res.data.name);
             });

            },
        buy() {
          vant.Toast('立即购买');
        }
      }
    });
   Vue.use(vant.Lazyload);
    Vue.use(vant.Empty);
    Vue.use(vant.CouponCell);
    Vue.use(vant.CouponList);
  </script>
</body>
</html>
