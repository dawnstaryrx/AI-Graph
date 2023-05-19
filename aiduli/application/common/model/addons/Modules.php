<?php

namespace app\common\model\addons;

use app\common\model\BaseModel;

/**
 * 模块模型
 * Class Apply
 * @package app\common\model\dealer
 */
class Modules extends BaseModel
{
    protected $name = 'modules';


    /**
     * 关联操作表
     * @return \think\model\moduls\hasMany
     */
    public function modulesBindings()
    {
        return $this->hasMany('app\common\model\addons\ModulesBindings', 'module','name');
    }

    /**
     * 模块详情
     * @param $where
     * @return Apply|static
     * @throws \think\exception\DbException
     */
    public static function detail($where)
    {
        return self::get($where);
    }



}