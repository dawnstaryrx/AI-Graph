<?phpഀ
ഀ
namespace app\api\controller;ഀ
ഀ
use app\api\model\UploadFile;ഀ
use app\api\model\Setting as SettingModel;ഀ
use app\common\library\storage\Driver as StorageDriver;ഀ
ഀ
/**ഀ
 * 文件库管理ഀ
 * Class Uploadഀ
 * @package app\api\controllerഀ
 */ഀ
class Upload extends Controllerഀ
{ഀ
    private $config;ഀ
    private $user;ഀ
ഀ
    /**ഀ
     * 构造方法ഀ
     * @throws \app\common\exception\BaseExceptionഀ
     * @throws \think\exception\DbExceptionഀ
     */ഀ
    public function _initialize()ഀ
    {ഀ
        parent::_initialize();ഀ
        // 存储配置信息ഀ
        $this->config = SettingModel::getItem('storage');ഀ
        // 验证用户ഀ
        $this->user = $this->getUser();ഀ
    }ഀ
ഀ
    /**ഀ
     * 图片਍⁎ꕏS਍     ⨀ 䀀爀攀琀甀爀渀 愀爀爀愀礀 ਍     ⨀ 䀀琀栀爀漀眀猀 尀琀栀椀渀欀尀䔀砀挀攀瀀琀椀漀渀 ਍     ⨀⼀ ਍    瀀甀戀氀椀挀 昀甀渀挀琀椀漀渀 椀洀愀最攀⠀⤀ ਍    笀 ਍        ⼀⼀ 鸀譛ᙏ塓ꡛ煐ꢚR਍        ␀匀琀漀爀愀最攀䐀爀椀瘀攀爀 㴀 渀攀眀 匀琀漀爀愀最攀䐀爀椀瘀攀爀⠀␀琀栀椀猀ⴀ㸀挀漀渀昀椀最⤀㬀 ਍        ⼀⼀ 븀溋ൿ上传文件的信息ഀ
        $StorageDriver->setUploadFile('iFile');ഀ
        // ਍⁎﹏䝖r਍        椀昀 ⠀℀␀匀琀漀爀愀最攀䐀爀椀瘀攀爀ⴀ㸀甀瀀氀漀愀搀⠀⤀⤀ 笀 ਍            爀攀琀甀爀渀 樀猀漀渀⠀嬀✀挀漀搀攀✀ 㴀㸀 　Ⰰ ✀洀猀最✀ 㴀㸀 ✀︀䝖൲上传失败' . $StorageDriver->getError()]);ഀ
        }ഀ
        // 图片਍⁎蒍_਍        ␀昀椀氀攀一愀洀攀 㴀 ␀匀琀漀爀愀最攀䐀爀椀瘀攀爀ⴀ㸀最攀琀䘀椀氀攀一愀洀攀⠀⤀㬀 ਍        ⼀⼀ ︀䝖潏`਍        ␀昀椀氀攀䤀渀昀漀 㴀 ␀匀琀漀爀愀最攀䐀爀椀瘀攀爀ⴀ㸀最攀琀䘀椀氀攀䤀渀昀漀⠀⤀㬀 ਍        ⼀⼀ ﬀꁭ蝒鍎끞喋_਍        ␀甀瀀氀漀愀搀䘀椀氀攀 㴀 ␀琀栀椀猀ⴀ㸀愀搀搀唀瀀氀漀愀搀䘀椀氀攀⠀␀昀椀氀攀一愀洀攀Ⰰ ␀昀椀氀攀䤀渀昀漀Ⰰ ✀椀洀愀最攀✀⤀㬀 ਍        ⼀⼀ ︀䝖൲上传成功ഀ
        return json(['code' => 1, 'msg' => '图片਍⁎၏齢❒Ⰰ ✀搀愀琀愀✀ 㴀㸀 ␀甀瀀氀漀愀搀䘀椀氀攀ⴀ㸀瘀椀猀椀戀氀攀⠀嬀✀昀椀氀攀开椀搀✀崀⤀崀⤀㬀 ਍    紀 ਍ ਍    ⼀⨀⨀ ਍     ⨀ ﬀꁭ蝒鍎൞上传记录ഀ
     * @param $fileNameഀ
     * @param $fileInfoഀ
     * @param $fileTypeഀ
     * @return UploadFileഀ
     */ഀ
    private function addUploadFile($fileName, $fileInfo, $fileType)ഀ
    {ഀ
        // 存储引擎ഀ
        $storage = $this->config['default'];ഀ
        // 存储域T਍        ␀昀椀氀攀唀爀氀 㴀 椀猀猀攀琀⠀␀琀栀椀猀ⴀ㸀挀漀渀昀椀最嬀✀攀渀最椀渀攀✀崀嬀␀猀琀漀爀愀最攀崀嬀✀搀漀洀愀椀渀✀崀⤀ ਍            㼀 ␀琀栀椀猀ⴀ㸀挀漀渀昀椀最嬀✀攀渀最椀渀攀✀崀嬀␀猀琀漀爀愀最攀崀嬀✀搀漀洀愀椀渀✀崀 㨀 ✀✀㬀 ਍        ⼀⼀ ﬀꁭ蝒鍎끞喋_਍        ␀洀漀搀攀氀 㴀 渀攀眀 唀瀀氀漀愀搀䘀椀氀攀㬀 ਍        ␀洀漀搀攀氀ⴀ㸀愀搀搀⠀嬀 ਍            ✀猀琀漀爀愀最攀✀ 㴀㸀 ␀猀琀漀爀愀最攀Ⰰ ਍            ✀昀椀氀攀开甀爀氀✀ 㴀㸀 ␀昀椀氀攀唀爀氀Ⰰ ਍            ✀昀椀氀攀开渀愀洀攀✀ 㴀㸀 ␀昀椀氀攀一愀洀攀Ⰰ ਍            ✀昀椀氀攀开猀椀稀攀✀ 㴀㸀 ␀昀椀氀攀䤀渀昀漀嬀✀猀椀稀攀✀崀Ⰰ ਍            ✀昀椀氀攀开琀礀瀀攀✀ 㴀㸀 ␀昀椀氀攀吀礀瀀攀Ⰰ ਍            ✀攀砀琀攀渀猀椀漀渀✀ 㴀㸀 瀀愀琀栀椀渀昀漀⠀␀昀椀氀攀䤀渀昀漀嬀✀渀愀洀攀✀崀Ⰰ 倀䄀吀䠀䤀一䘀伀开䔀堀吀䔀一匀䤀伀一⤀Ⰰ ਍            ✀椀猀开甀猀攀爀✀ 㴀㸀 ㄀ ਍        崀⤀㬀 ਍        爀攀琀甀爀渀 ␀洀漀搀攀氀㬀 ਍    紀 ਍ ਍紀�