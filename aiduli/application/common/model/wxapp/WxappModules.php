<?php
namespace app\common\model\wxapp;

use app\common\model\BaseModel;

/**
 * 平台模块 模型
 * Class Apply
 * @package app\common\model\dealer
 */
class WxappModules extends BaseModel
{
    protected $name = 'wxapp_modules';

    /**
     * 获取平台导航
     * @param string $uniacid
     * @return array
     */
    public function getWaxppMenus($uniacid=''){

        $menus_list =   $this->where(array('uniacid'=>$uniacid))->select()->toArray();

        $menus = array();
       
        
        foreach ($menus_list as &$v){

            $menus[$v['identifie']] = array(
                'name'=>$v['name'],
                'icon_image'=>true,
                'icon'=>'icon-setting',
                'index'=>'addons/index',
                'do'=>array('modules'=>$v['identifie'])
            );
        }

        return  $menus;
    }

}