<?php

namespace app\common\library\storage\engine;

use app\common\library\helper;

/**
 * 本地文件驱动
 * Class Local
 * @package app\common\library\storage\drivers
 */
class Local extends Server
{
    private $uploadPat='';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 上传图片文件
     * @return array|bool
     */
    public function upload()
    {
        return $this->isInternal ? $this->uploadByInternal() : $this->uploadByExternal();
    }

    /**
     * 外部上传(指用户上传,需验证文件类型、大小)
     * @return bool
     */
    private function uploadByExternal()
    {
        // 上传目录
        $uplodDir = WEB_PATH . 'uploads';
        // 验证文件并上传
        $info = $this->file->validate([
            'size' => 10 * 1024 * 1024,
            'ext' => 'mp4,mov,jpg,jpeg,png,gif'
        ]);
        $ext = $this->getFileInfo();
        $ex_type =explode('/', $ext['type']);
        $type = $ex_type[0];
        if($type=='video'){
            $uplodDir.='/video/'.date("Y",time()).'/'.date('m',time()).'/'.date("d",time());
        }
        if($type=='image'){
            $uplodDir.='/image/'.date("Y",time()).'/'.date('m',time()).'/'.date("d",time());
        }
        $this->uploadPat = $uplodDir;
        if (!file_exists($uplodDir)){
            mkdir($uplodDir);
        }
        $info->move($uplodDir, $this->fileName);
        if (empty($info)) {
            $this->error = $this->file->getError();
            return false;
        }
        return true;
    }

    /**
     * 内部上传(指系统上传,信任模式)
     * @return bool
     */
    private function uploadByInternal()
    {
        // 上传目录
        $uplodDir = WEB_PATH . 'uploads';
        // 要上传图片的本地路径
        $realPath = $this->getRealPath();
        $ext = $this->getFileInfo();
        $ex_type =explode('/', $ext['type']);
        $type = $ex_type[0];
        if($type=='video'){
            $uplodDir.='/video/'.date("Y",time()).'/'.date('m',time()).'/'.date("d",time());
        }
        if($type=='image'){
            $uplodDir.='/image/'.date("Y",time()).'/'.date('m',time()).'/'.date("d",time());
        }
        if (!file_exists($uplodDir)){
            mkdir($uplodDir);
        }
        $this->uploadPat = $uplodDir;
        if (!rename($realPath, "{$uplodDir}/$this->fileName")) {
            $this->error = 'upload write error';
            return false;
        }
        return true;
    }

    /**
     * 删除文件
     * @param $fileName
     * @return bool|mixed
     */
    public function delete($fileName)
    {
        // 文件所在目录
        $filePath = WEB_PATH . "uploads/{$fileName}";
        return !file_exists($filePath) ?: unlink($filePath);
    }

    /**
     * 返回文件路径
     * @return mixed
     */
    public function getFileName()
    {
        $ext = $this->getFileInfo();
        $ex_type =explode('/', $ext['type']);
        $type = $ex_type[0];
        if($type=='video'){
            $uplodDir='video/'.date("Y",time()).'/'.date('m',time()).'/'.date("d",time());
        }
        if($type=='image'){
            $uplodDir='image/'.date("Y",time()).'/'.date('m',time()).'/'.date("d",time());
        }
        return $uplodDir.'/'.$this->fileName;
    }

}
