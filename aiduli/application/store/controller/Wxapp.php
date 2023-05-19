<?php

namespace app\store\controller;

use app\store\model\Wxapp as WxappModel;
use app\store\model\WxappNavbar as WxappNavbarModel;
use app\store\model\addons\Modules as ModulesModel;
use think\Db;
/**
 * 平台管理
 * Class Wxapp
 * @package app\store\controller
 */
class Wxapp extends Controller
{
    /**
     * 平台详情页面
     *
     */
    public function home($uniacid=''){
     global $_W;
       $_W['uniacid'] = $uniacid;
       session('uniacid',$uniacid);
       return $this->fetch('home', compact('list'));
    }

    /**
     * 平台列表
     *
     */
    public function list(){
        $model = new WxappModel;
        $list['list'] = $model->getList();



$list['mlist']=Db::name('wxapp_modules')->where(array('uniacid'=>$list['list'][0]['wxapp_id']))->select();

        return $this->fetch('list', compact('list'));
    }

	
    /**
     * 平台设置
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function edit($wxapp_id)
    {
        // 当前平台信息
        $model = WxappModel::detail($wxapp_id);
        if (!$this->request->isAjax()) {
            return $this->fetch('edit', compact('model'));
        }
        // 更新平台设置
        if ($model->edit($this->postData('wxapp'))) {
            return $this->renderSuccess('更新成功');
        }
        return $this->renderError($model->getError() ?: '更新失败');
    }
    /**
     * 应用列表
     * @param string $search
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function modulelist($search=''){
            $model = new ModulesModel;
            return $this->fetch('modulelist', [
                'list' => $model->getList($search),
            ]);

    }
    /**
     * 模块添加
     */
    public function addmodule($search=''){
        $model = new ModulesModel;
        $wxapp_modules_list = Db::name('wxapp_modules')->where(array('uniacid'=>session('uniacid')))->select();
        $check_list = array();
        foreach ($wxapp_modules_list as $vs){
            $check_list[] = $vs['identifie'];
        }
        if (!$this->request->isAjax()) {
            return $this->fetch('addmodule', [
                'list' => $model->getList($search),
                'check_list'=>$check_list
            ]);
        }
        $wxappmodel = new WxappModel;
        // 新增记录
        if ($wxappmodel->addModule($this->postData('wxapp_modules'))) {
            return $this->renderSuccess('添加成功', url('wxapp/list'));
        }
        return $this->renderError($model->getError() ?: '添加失败');
    }
    public function add(){
        $model = new WxappModel;
        if (!$this->request->isAjax()) {
            return $this->fetch('add', array());
        }
        // 新增记录
        if ($model->add($this->postData('wxapp'))) {
            return $this->renderSuccess('添加成功', url('wxapp/list'));
        }
        return $this->renderError($model->getError() ?: '添加失败');
    }
    /**
     * 删除平台
     * @param $article_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function delete($wxapp_id)
    {
        // 平台详情
        $model = WxappModel::detail($wxapp_id);
        if (!$model->setDelete()) {
            return $this->renderError($model->getError() ?: '删除失败');
        }
        return $this->renderSuccess('删除成功');
    }
    /**
     * 导航栏设置
     * @return array|mixed
     * @throws \think\exception\DbException
     */
    public function tabbar()
    {
        $model = WxappNavbarModel::detail();
        if (!$this->request->isAjax()) {
            return $this->fetch('tabbar', compact('model'));
        }
        $data = $this->postData('tabbar');
        if (!$model->edit($data)) {
            return $this->renderError('更新失败');
        }
        return $this->renderSuccess('更新成功');
    }

}
