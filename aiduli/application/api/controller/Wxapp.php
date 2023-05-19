<?php

namespace application\api\controller;

use application\api\model\Wxapp as WxappModel;
use application\api\model\WxappHelp;
use application\store\model\addons\Modules as ModulesModel;

/**
 * 微信小程序
 * Class Wxapp
 * @package app\api\controller
 */
class Wxapp extends Controller
{
    /**
     * 小程序基础信息
     * @return array
     */
    public function base()
    {
//        $wxapp = WxappModel::getWxappCache();
        return $this->renderSuccess([]);
    }

    /**
     * 帮助中心
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function help()
    {
        $model = new WxappHelp;
        $list = $model->getList();
        return $this->renderSuccess(compact('list'));
    }
    public function api(){
	
        //加载微擎参数
        global $_W,$_GPC;
        require_once WEB_PATH.'/extend/we/loader.class.php';
        require_once WEB_PATH.'/extend/we/WeModuleWxapp.class.php';
        $param = input();
        if(!isset($param['m'])){
            return $this->renderError('模块不存在请重新进入');
        }
        $_GPC = array();
        $_GPC = input();
        $i = isset($_GPC['i'])?$_GPC['i']:$_GPC['uniacid'];
       // var_dump($i);die();
        //获取模块标识
        $module = $_GPC['m'];
        if(!isset($_GPC['do'])){
            return $this->renderError('操作为空请重新进入');
        }
        if(!$modules_detail = ModulesModel::detail(array('identifie'=>$module))){
            return $this->renderError($module.'模块不存,请去后台查看!');
        }
        $modules_detail = $modules_detail->toArray();
        $_W['modules'] = $modules_detail;
        session("modulename",$module);
        if(!file_exists(ADDONS_PATH.$module.'/site.php')){
            return $this->renderError('模块site.php不存在请重新进入');
        }
        if(!file_exists(ADDONS_PATH.$module.'/wxapp.php')){
            return $this->renderError('模块wxapp.php不存在请重新进入');
        }
        require ADDONS_PATH.$module.'/wxapp.php';
        $module_class = $module."ModuleWxapp";
        $module_class = "\\".ucwords($module_class);
        $site = new $module_class();
        $do = $param['do'];
        $do = "doPage".ucwords($do);
        $site->$do();
    }

}
