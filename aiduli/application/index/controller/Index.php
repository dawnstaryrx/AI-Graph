<?php

namespace app\index\controller;

use app\store\model\addons\Modules as ModulesModel;
use think\Request;
use think\Db;
/**
 * PC首页
 * Class Index
 * @package app\store\controller
 */
class Index extends \think\Controller
{
    /**
     * 后台首页
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        //加载微擎参数
        global $_W,$_GPC;
        require_once WEB_PATH.'/extend/we/loader.class.php';
        require_once WEB_PATH.'/extend/we/WeModuleWebapp.class.php';
        $param = input();
        if(!isset($param['module'])&&empty($param['module'])){
            $default_module =Db::name('setting')->where(array('key'=>'store'))->find();
            if(!empty($default_module['values'])){
                $default_module = json_decode($default_module['values'],true);
                if(is_array($default_module)&&!empty($default_module['index_modules'])){
                    $param['module'] =$default_module['index_modules'];
                }

            }

        }
        //获取模块标识
        $module = $param['module'];
        $modules_detail = ModulesModel::detail(array('identifie'=>$module));
        if(!isset($param['module'])||empty($module)){
			echo " <script>window.location.replace('.?s=/store/passport/login')</script>";die();
            echo "<p>欢迎使用应用管理系统！</p><a href='.?s=/store/passport/login'>后端入口</a>";die();
        }
        $request = Request::instance();
        $domain = $request->domain();
        $_W['siteroot'] = $domain;
        $_GPC =input();

        if(!isset($param['do'])){
            $do ='welcome';
        }else{
            $do = $param['do'];
            $do = "doPage".$do;
        }
        if(empty($_W['uniacid'])){
            $_W['uniacid'] = $_W['admin']['wxapp']['wxapp_id'];
        }
        if(empty($_W['uniacid'])){
            $_W['uniacid'] =1;
        }

        if(!empty($modules_detail)){
            $modules_detail =  $modules_detail->toArray();
        }
        if(empty($modules_detail)){
			echo " <script>window.location.replace('.?s=/store/passport/login')</script>";die();
            echo "<p>欢迎使用多平台管理系统！</p><a href='.?s=/store/passport/login'>后端入口</a>";die();
        }
        $_W['modules'] = $modules_detail;
        session("modulename",$module);
        if(!file_exists(ADDONS_PATH.$module.'/site.php')){
            return $this->renderError('模块site.php不存在请重新进入');
        }
        load()->func('pdo');
        require ADDONS_PATH.$module.'/webapp.php';
        $module_class = $module."ModuleWebapp";
        $module_class = "\\".ucwords($module_class);
        $site = new $module_class();


        $site->$do();
    }

}
