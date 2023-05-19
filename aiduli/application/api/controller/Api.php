<?php

namespace app\api\controller;
use app\store\model\addons\Modules as ModulesModel;

/**
 * api接口
 * Class Wxapp
 * @package app\api\controller
 */
class Api extends Controller
{

    public function run(){
        //加载微擎参数
        global $_W,$_GPC;
        require_once WEB_PATH.'/extend/we/loader.class.php';
        require_once WEB_PATH.'/extend/we/WeModuleSite.class.php';
        $param = input();
        if(!isset($param['m'])){
            return $this->renderError('模块不存在请重新进入');
        }
        $_GPC = array();
        $_GPC = input();
        $i = $_GPC['i'];
        //获取模块标识
        $module = $param['m'];
        if(!isset($param['do'])){
            return $this->renderError('操作为空请重新进入');
        }
        if(!$modules_detail = ModulesModel::detail(array('identifie'=>$module))){
            return $this->renderError($module.'模块不存,请去后台查看!');
        }
        $modules_detail = $modules_detail->toArray();
        $_W['modules'] = $modules_detail;
        session("modulename",$module);
	
        if(!file_exists(ADDONS_PATH.$module.'/api.php')){
            return $this->renderError('模块不存在请重新进入');
        }
        require ADDONS_PATH.$module.'/api.php';
        $module_class = $module."ModuleSite";
        $module_class = "\\".ucwords($module_class);
        $site = new $module_class();
        $do = $param['do'];
        $do = "doPage".$do;
        $site->$do();
    }

}
