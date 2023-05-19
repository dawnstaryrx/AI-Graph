<?php

namespace app\index\controller;

use app\common\library\wechat\Wechat as WechatDriver;
/**
 * 微信公共平台校验
 * Class Index
 * @package app\store\controller
 */
class Api extends \think\Controller
{

    public function token(){
        define("TOKEN", "weixin");//此处的TOKEN就是接下来需要填在微信的配置里面的token，需要保持严格一致
        $wechatObj = new WechatDriver();
        $wechatObj->responseMsg();
    }

}
