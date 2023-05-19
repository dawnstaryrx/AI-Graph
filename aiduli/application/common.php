<?php

// 应用公共函数库文件
error_reporting(E_ERROR | E_PARSE );
use think\Request;
use think\Log;
use think\Config;
use think\exception\HttpResponseException;
use think\Response;
use think\response\Redirect;
use think\Url;
use think\View as ViewTemplate;
use Guzzle\Cache\NullCacheAdapter;
/**
 * 打印调试函数
 * @param $content
 * @param $is_die
 */
function pre($content, $is_die = true)
{
    header('Content-type: text/html; charset=utf-8');
    echo '<pre>' . print_r($content, true);
    $is_die && die();
}

/**
 * 驼峰命名转下划线命名
 * @param $str
 * @return string
 */
function toUnderScore($str)
{
    $dstr = preg_replace_callback('/([A-Z]+)/', function ($matchs) {
        return '_' . strtolower($matchs[0]);
    }, $str);
        return trim(preg_replace('/_{2,}/', '_', $dstr), '_');
}

/**
 * 生成密码hash值
 * @param $password
 * @return string
 */
function tpwe_hash($password)
{
    return md5(md5($password) . 'tp_we');
}

/**
 * 获取当前域名及根路径
 * @return string
 */
function base_url()
{
    static $baseUrl = '';
    if (empty($baseUrl)) {
        $request = Request::instance();
        $subDir = str_replace('\\', '/', dirname($request->server('PHP_SELF')));
        $baseUrl = $request->scheme() . '://' . $request->host() . $subDir . ($subDir === '/' ? '' : '/');
    }
    return $baseUrl;
}

/**
 * 写入日志 (废弃)
 * @param string|array $values
 * @param string $dir
 * @return bool|int
 */
function write_log($values, $dir)
{
    if (is_array($values))
        $values = print_r($values, true);
        // 日志内容
        $content = '[' . date('Y-m-d H:i:s') . ']' . PHP_EOL . $values . PHP_EOL . PHP_EOL;
        try {
            // 文件路径
            $filePath = $dir . '/logs/';
            // 路径不存在则创建
            !is_dir($filePath) && mkdir($filePath, 0755, true);
            // 写入文件
            return file_put_contents($filePath . date('Ymd') . '.log', $content, FILE_APPEND);
        } catch (\Exception $e) {
            return false;
        }
}

/**
 * 写入日志 (使用tp自带驱动记录到runtime目录中)
 * @param $value
 * @param string $type
 */
function log_write($value, $type = 'yoshop-info')
{
    $msg = is_string($value) ? $value : var_export($value, true);
    Log::record($msg, $type);
}

/**
 * curl请求指定url (get)
 * @param $url
 * @param array $data
 * @return mixed
 */
function curl($url, $data = [])
{
    // 处理get数据
    if (!empty($data)) {
        $url = $url . '?' . http_build_query_tp($data);
    }
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}

/**
 * curl请求指定url (post)
 * @param $url
 * @param array $data
 * @return mixed
 */
function curlPost($url, $data = [])
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if (!function_exists('array_column')) {
    /**
     * array_column 兼容低版本php
     * (PHP < 5.5.0)
     * @param $array
     * @param $columnKey
     * @param null $indexKey
     * @return array
     */
    function array_column($array, $columnKey, $indexKey = null)
    {
        $result = array();
        foreach ($array as $subArray) {
            if (is_null($indexKey) && array_key_exists($columnKey, $subArray)) {
                $result[] = is_object($subArray) ? $subArray->$columnKey : $subArray[$columnKey];
            } elseif (array_key_exists($indexKey, $subArray)) {
                if (is_null($columnKey)) {
                    $index = is_object($subArray) ? $subArray->$indexKey : $subArray[$indexKey];
                    $result[$index] = $subArray;
                } elseif (array_key_exists($columnKey, $subArray)) {
                    $index = is_object($subArray) ? $subArray->$indexKey : $subArray[$indexKey];
                    $result[$index] = is_object($subArray) ? $subArray->$columnKey : $subArray[$columnKey];
                }
            }
        }
        return $result;
    }
}

/**
 * 多维数组合并
 * @param $array1
 * @param $array2
 * @return array
 */
function array_merge_multiple($array1, $array2)
{
    $merge = $array1 + $array2;
    $data = [];
    foreach ($merge as $key => $val) {
        if (
            isset($array1[$key])
            && is_array($array1[$key])
            && isset($array2[$key])
            && is_array($array2[$key])
            ) {
                $data[$key] = array_merge_multiple($array1[$key], $array2[$key]);
            } else {
                $data[$key] = isset($array2[$key]) ? $array2[$key] : $array1[$key];
            }
    }
    return $data;
}

/**
 * 二维数组排序
 * @param $arr
 * @param $keys
 * @param bool $desc
 * @return mixed
 */
function array_sort($arr, $keys, $desc = false)
{
    $key_value = $new_array = array();
    foreach ($arr as $k => $v) {
        $key_value[$k] = $v[$keys];
    }
    if ($desc) {
        arsort($key_value);
    } else {
        asort($key_value);
    }
    reset($key_value);
    foreach ($key_value as $k => $v) {
        $new_array[$k] = $arr[$k];
    }
    return $new_array;
}

/**
 * 数据导出到excel(csv文件)
 * @param $fileName
 * @param array $tileArray
 * @param array $dataArray
 */
function export_excel($fileName, $tileArray = [], $dataArray = [])
{
    ini_set('memory_limit', '512M');
    ini_set('max_execution_time', 0);
    ob_end_clean();
    ob_start();
    header("Content-Type: text/csv");
    header("Content-Disposition:filename=" . $fileName);
    $fp = fopen('php://output', 'w');
    fwrite($fp, chr(0xEF) . chr(0xBB) . chr(0xBF));// 转码 防止乱码(比如微信昵称)
    fputcsv($fp, $tileArray);
    $index = 0;
    foreach ($dataArray as $item) {
        if ($index == 1000) {
            $index = 0;
            ob_flush();
            flush();
        }
        $index++;
        fputcsv($fp, $item);
    }
    ob_flush();
    flush();
    ob_end_clean();
}

/**
 * 隐藏敏感字符
 * @param $value
 * @return string
 */
function substr_cut($value)
{
    $strlen = mb_strlen($value, 'utf-8');
    if ($strlen <= 1) return $value;
    $firstStr = mb_substr($value, 0, 1, 'utf-8');
    $lastStr = mb_substr($value, -1, 1, 'utf-8');
    return $strlen == 2 ? $firstStr . str_repeat('*', $strlen - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
}

/**
 * 获取当前系统版本号
 * @return mixed|null
 * @throws Exception
 */
function get_version()
{
    static $version = null;
    if ($version) {
        return $version;
    }
    $file = dirname(APP_PATH) . '/version.json';
    //var_dump($file);die();
    if (!file_exists($file)) {
        throw new Exception('version.json not found');
    }
    $version = json_decode(file_get_contents($file), true);
    if (!is_array($version)) {
        throw new Exception('version cannot be decoded');
    }
    return $version['version'];
}

/**
 * 获取全局唯一标识符
 * @param bool $trim
 * @return string
 */
function getGuidV4($trim = true)
{
    // Windows
    if (function_exists('com_create_guid') === true) {
        $charid = com_create_guid();
        return $trim == true ? trim($charid, '{}') : $charid;
    }
    // OSX/Linux
    if (function_exists('openssl_random_pseudo_bytes') === true) {
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);    // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);    // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
    // Fallback (PHP 4.2+)
    mt_srand((double)microtime() * 10000);
    $charid = strtolower(md5(uniqid(rand(), true)));
    $hyphen = chr(45);                  // "-"
    $lbrace = $trim ? "" : chr(123);    // "{"
    $rbrace = $trim ? "" : chr(125);    // "}"
    $guidv4 = $lbrace .
    substr($charid, 0, 8) . $hyphen .
    substr($charid, 8, 4) . $hyphen .
    substr($charid, 12, 4) . $hyphen .
    substr($charid, 16, 4) . $hyphen .
    substr($charid, 20, 12) .
    $rbrace;
    return $guidv4;
}

/**
 * 时间戳转换日期
 * @param $timeStamp
 * @return false|string
 */
function format_time($timeStamp)
{
    return date('Y-m-d H:i:s', $timeStamp);
}
/**
 * @Min晓天
 * 获取文件目录列表,该方法返回数组
 */
function getDir($dir) {
    $dirArray=array();
    $handle = scandir ($dir);
    if (false != $handle) {
        $i=0;
        foreach ($handle as $file){
            //去掉"“.”、“..”以及带“.xxx”后缀的文件
            if ($file != "." && $file != ".."&&!strpos($file,".")) {
                $dirArray[$i]=$file;
                $i++;
            }
        }
    }
    return $dirArray;
}
/**
 * 左侧填充0
 * @param $value
 * @param int $padLength
 * @return string
 */
function pad_left($value, $padLength = 2)
{
    return \str_pad($value, $padLength, "0", STR_PAD_LEFT);
}

/**
 * 过滤emoji表情
 * @param $text
 * @return null|string|string[]
 */
function filter_emoji($text)
{
    // 此处的preg_replace用于过滤emoji表情
    // 如需支持emoji表情, 需将mysql的编码改为utf8mb4
    return preg_replace('/[\xf0-\xf7].{3}/', '', $text);
}

function strexists($string, $find) {
    return !(strpos($string, $find) === FALSE);
}

/**
 * 解析插件xml
 *
 *
 */
function ext_addons_manifest_parse($xml) {
    if (!strexists($xml, '<manifest')) {
        $xml = base64_decode($xml);
    }
    if (empty($xml)) {
        return array();
    }
    $dom = new DOMDocument();
    $dom->loadXML($xml);
    $root = $dom->getElementsByTagName('manifest')->item(0);
    if (empty($root)) {
        return array();
    }
    $manifest = array();
    $vcode = explode(',', $root->getAttribute('versionCode'));
    $manifest['versions'] = array();
    if (is_array($vcode)) {
        foreach ($vcode as $v) {
            $v = trim($v);
            if (!empty($v)) {
                $manifest['versions'][] = $v;
            }
        }
        $manifest['versions'][] = '0.52';
        $manifest['versions'][] = '0.6';
        $manifest['versions'] = array_unique($manifest['versions']);
    }
    $manifest['install'] = $root->getElementsByTagName('install')->item(0)->textContent;
    $manifest['uninstall'] = $root->getElementsByTagName('uninstall')->item(0)->textContent;
    $manifest['upgrade'] = $root->getElementsByTagName('upgrade')->item(0)->textContent;
    $application = $root->getElementsByTagName('application')->item(0);
    if (empty($application)) {
        return array();
    }
    $manifest['application'] = array(
        'name' => trim($application->getElementsByTagName('name')->item(0)->textContent),
        'identifie' => trim($application->getElementsByTagName('identifie')->item(0)->textContent),
        'version' => trim($application->getElementsByTagName('version')->item(0)->textContent),
        'type' => trim($application->getElementsByTagName('type')->item(0)->textContent),
        'ability' => trim($application->getElementsByTagName('ability')->item(0)->textContent),
        'description' => trim($application->getElementsByTagName('description')->item(0)->textContent),
        'author' => trim($application->getElementsByTagName('author')->item(0)->textContent),
        'url' => trim($application->getElementsByTagName('url')->item(0)->textContent),
        'setting' => trim($application->getAttribute('setting')) == 'true',
    );
    $platform = $root->getElementsByTagName('platform')->item(0);
    if (!empty($platform)) {
        $manifest['platform'] = array(
            'subscribes' => array(),
            'handles' => array(),
            'isrulefields' => false,
            'iscard' => false,
            'supports' => array(),
            'oauth_type' => 1,
        );
        $subscribes = $platform->getElementsByTagName('subscribes')->item(0);
        if (!empty($subscribes)) {
            $messages = $subscribes->getElementsByTagName('message');
            for ($i = 0; $i < $messages->length; $i++) {
                $t = $messages->item($i)->getAttribute('type');
                if (!empty($t)) {
                    $manifest['platform']['subscribes'][] = $t;
                }
            }
        }
        $handles = $platform->getElementsByTagName('handles')->item(0);
        if (!empty($handles)) {
            $messages = $handles->getElementsByTagName('message');
            for ($i = 0; $i < $messages->length; $i++) {
                $t = $messages->item($i)->getAttribute('type');
                if (!empty($t)) {
                    $manifest['platform']['handles'][] = $t;
                }
            }
        }
        $rule = $platform->getElementsByTagName('rule')->item(0);
        if (!empty($rule) && $rule->getAttribute('embed') == 'true') {
            $manifest['platform']['isrulefields'] = true;
        }
        $card = $platform->getElementsByTagName('card')->item(0);
        if (!empty($card) && $card->getAttribute('embed') == 'true') {
            $manifest['platform']['iscard'] = true;
        }
        $oauth_type = $platform->getElementsByTagName('oauth')->item(0);
        if (!empty($oauth_type) && $oauth_type->getAttribute('type') == OAUTH_TYPE_USERINFO) {
            $manifest['platform']['oauth_type'] = OAUTH_TYPE_USERINFO;
        }
        $supports = $platform->getElementsByTagName('supports')->item(0);
        if (!empty($supports)) {
            $support_type = $supports->getElementsByTagName('item');
            for ($i = 0; $i < $support_type->length; $i++) {
                $t = $support_type->item($i)->getAttribute('type');
                if (!empty($t)) {
                    $manifest['platform']['supports'][] = $t;
                }
            }
        }
        $plugins = $platform->getElementsByTagName('plugins')->item(0);
        if (!empty($plugins)) {
            $plugin_list = $plugins->getElementsByTagName('item');
            for ($i = 0; $i < $plugin_list->length; $i++) {
                $plugin = $plugin_list->item($i)->getAttribute('name');
                if (!empty($plugin)) {
                    $manifest['platform']['plugin_list'][] = $plugin;
                }
            }
        }
        $plugin_main = $platform->getElementsByTagName('plugin-main')->item(0);
        if (!empty($plugin_main)) {
            $plugin_main = $plugin_main->getAttribute('name');
            if (!empty($plugin_main)) {
                $manifest['platform']['main_module'] = $plugin_main;
            }
        }
    }
    $bindings = $root->getElementsByTagName('bindings')->item(0);
    if (!empty($bindings)) {
        //$points = array('page','');
        $ps = array('page','menu','cover');
        $manifest['bindings'] = array();
        foreach ($ps as $p) {
            $define = $bindings->getElementsByTagName($p)->item(0);
            $manifest['bindings'][$p] = _ext_module_manifest_entries($define);
        }
    }
    $permissions = $root->getElementsByTagName('permissions')->item(0);
    if (!empty($permissions)) {
        $manifest['permissions'] = array();
        $items = $permissions->getElementsByTagName('entry');
        for ($i = 0; $i < $items->length; $i++) {
            $item = $items->item($i);
            $row = array(
                'title' => $item->getAttribute('title'),
                'permission' => $item->getAttribute('do'),
            );
            if (!empty($row['title']) && !empty($row['permission'])) {
                $manifest['permissions'][] = $row;
            }
        }
    }
    return $manifest;
}


function ext_addons_manifest($filename) {
    if (!file_exists($filename)) {
        return array();
    }
    $xml = file_get_contents($filename);
    return ext_addons_manifest_parse($xml);
}
function _ext_module_manifest_entries($elm) {
    $ret = array();
    if (!empty($elm)) {
        $call = $elm->getAttribute('call');
        if (!empty($call)) {
            $ret[] = array('call' => $call);
        }
        $entries = $elm->getElementsByTagName('entry');
        for ($i = 0; $i < $entries->length; $i++) {
            $entry = $entries->item($i);
            $direct = $entry->getAttribute('direct');
            $row = array(
                'title' => $entry->getAttribute('title'),
                'do' => $entry->getAttribute('do'),
                'direct' => !empty($direct) && $direct != 'false' ? true : false,
                'state' => $entry->getAttribute('state')
            );
            if (!empty($row['title']) && !empty($row['do'])) {
                $ret[] = $row;
            }
        }
    }
    return $ret;
}
function manifest_check($module_name, $manifest) {
    if(is_string($manifest)) {
        return error(1, '模块配置项定义错误, 具体错误内容为: <br />' . $manifest);
    }
    if(empty($manifest['application']['name'])) {
        return error(1, '模块名称未定义. ');
    }
    if(empty($manifest['application']['identifie']) || !preg_match('/^[a-z][a-z\d_]+$/i', $manifest['application']['identifie'])) {
        return error(1, '模块标识符未定义或格式错误(仅支持字母和数字, 且只能以字母开头).');
    }
    if(strtolower($module_name) != strtolower($manifest['application']['identifie'])) {
        return error(1, '模块名称定义与模块路径名称定义不匹配. ');
    }
    if(empty($manifest['application']['version']) || !preg_match('/^[\d\.]+$/i', $manifest['application']['version'])) {
        return error(1, '模块版本号未定义(仅支持数字和句点). ');
    }
    if(empty($manifest['application']['ability'])) {
        return error(1, '模块功能简述未定义. ');
    }
    if($manifest['platform']['isrulefields'] && !in_array('text', $manifest['platform']['handles'])) {
        return error(1, '模块功能定义错误, 嵌入规则必须要能够处理文本类型消息.. ');
    }
    if((!empty($manifest['cover']) || !empty($manifest['rule'])) && !$manifest['platform']['isrulefields']) {
        return error(1, '模块功能定义错误, 存在封面或规则功能入口绑定时, 必须要嵌入规则. ');
    }
    global $points;
    if (!empty($points)) {
        foreach($points as $name => $point) {
            if(is_array($manifest[$name])) {
                foreach($manifest[$name] as $menu) {
                    if(trim($menu['title']) == ''  || !preg_match('/^[a-z\d]+$/i', $menu['do']) && empty($menu['call'])) {
                        return error(1, $point['title'] . ' 扩展项功能入口定义错误, (操作标题[title], 入口方法[do])格式不正确.');
                    }
                }
            }
        }
    }
    if(!is_array($manifest['versions'])) {
        return error(1, '兼容版本格式错误');
    }
    return error(0);
}
function error($errno, $message = '') {
    return array(
        'errno' => $errno,
        'message' => $message,
    );
}
function check_versions($versions1,$versions2){
    $versions_arr = explode(".", $versions1);
    $versions_arr2 = explode(".", $versions2);
    for ($i=0;$i<count($versions_arr);$i++){
        if($versions_arr[$i]>$versions_arr2[$i]){
            return 1;
        }

    }
    return 0;

}
/**
 *
 * @param 数据库前缀 $table
 * @return string
 */
function tablename($table) {
    $preix = config('database.prefix');
    return "`{$preix}{$table}`";
}
/**
 * 校验微擎submit提交
 *待完善
 *
 * */
function checksubmit($var = 'submit', $allowget = false) {
    if(isset($_POST['submit'])){
        return true;
    }else{
        return false;
    }


}
function tomedia($url){
    return toimage($url);
}
function template($filename, $flag = TEMPLATE_DISPLAY)
{
    global $_W;

    if($filename=='common/header'){
        $source = IA_ROOT . "/addons/ad_tui/template/{$filename}.html";
        if(!is_file($source)){
            $source = IA_ROOT . "/web/themes/web/{$filename}.html";
        }

    }
    $compile = IA_ROOT . "/runtime/tpl/web/ad_tui/default/{$filename}.tpl.php";

    if (!is_file($source)) {
        exit("Error: template source '{$filename}' is not exist!");
    }
    if (!is_file($compile) || filemtime($source) > filemtime($compile)) {
        template_compile($source, $compile);
    }
    switch ($flag) {
        case TEMPLATE_DISPLAY:
        default:
            extract($GLOBALS, 1);
            include $compile;
            break;
        case TEMPLATE_FETCH:
            extract($GLOBALS, 1);
            ob_flush();
            ob_clean();
            ob_start();
            include $compile;
            $contents = ob_get_contents();
            ob_clean();
            return $contents;
            break;
        case TEMPLATE_INCLUDEPATH:
            return $compile;
            break;
    }
}
function template_addquote($matchs)
{
    $code = "<?php {$matchs[1]}?>";
    $code = preg_replace('/\[([a-zA-Z0-9_\-\.\x7f-\xff]+)\](?![a-zA-Z0-9_\-\.\x7f-\xff\[\]]*[\'"])/s', "['$1']", $code);
    return str_replace('\\\"', '\"', $code);
}
function template_compile($from, $to, $inmodule = false)
{
    $path = dirname($to);
    if (!is_dir($path)) {
        load()->func('file');
        mkdirs($path);
    }
    $content = template_parse(file_get_contents($from), $inmodule);
    if (IMS_FAMILY == 'x' && !preg_match('/(footer|header|account\/welcome|login|register)+/', $from)) {
        $content = str_replace('餐饮', '系统', $content);
    }
    file_put_contents($to, $content);
}


function template_parse($str, $inmodule = false)
{
    $str = preg_replace('/<!--{(.+?)}-->/s', '{$1}', $str);
    $str = preg_replace('/{template\s+(.+?)}/', '<?php (!empty($this) && $this instanceof WeModuleSite || ' . intval($inmodule) . ') ? (include $this->template($1, TEMPLATE_INCLUDEPATH)) : (include template($1, TEMPLATE_INCLUDEPATH));?>', $str);
    $str = preg_replace('/{php\s+(.+?)}/', '<?php $1?>', $str);
    $str = preg_replace('/{if\s+(.+?)}/', '<?php if($1) { ?>', $str);
    $str = preg_replace('/{else}/', '<?php } else { ?>', $str);
    $str = preg_replace('/{else ?if\s+(.+?)}/', '<?php } else if($1) { ?>', $str);
    $str = preg_replace('/{\/if}/', '<?php } ?>', $str);
    $str = preg_replace('/{loop\s+(\S+)\s+(\S+)}/', '<?php if(is_array($1)) { foreach($1 as $2) { ?>', $str);
    $str = preg_replace('/{loop\s+(\S+)\s+(\S+)\s+(\S+)}/', '<?php if(is_array($1)) { foreach($1 as $2 => $3) { ?>', $str);
    $str = preg_replace('/{\/loop}/', '<?php } } ?>', $str);
    $str = preg_replace('/{(\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)}/', '<?php echo $1;?>', $str);
    $str = preg_replace('/{(\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff\[\]\'\"\$]*)}/', '<?php echo $1;?>', $str);
    $str = preg_replace('/{url\s+(\S+)}/', '<?php echo url($1);?>', $str);
    $str = preg_replace('/{url\s+(\S+)\s+(array\(.+?\))}/', '<?php echo url($1, $2);?>', $str);
    $str = preg_replace('/{media\s+(\S+)}/', '<?php echo tomedia($1);?>', $str);
    $str = preg_replace_callback('/<\?php([^\?]+)\?>/s', "template_addquote", $str);
    $str = preg_replace('/{([A-Z_\x7f-\xff][A-Z0-9_\x7f-\xff]*)}/s', '<?php echo $1;?>', $str);
    $str = str_replace('{##', '{', $str);
    $str = str_replace('##}', '}', $str);
    if (!empty($GLOBALS['_W']['setting']['remote']['type'])) {
        $str = str_replace('</body>', "<script>$(function(){\$('img').attr('onerror', '').on('error', function(){if (!\$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('{$GLOBALS['_W']['attachurl_local']}') == -1 ? this.src.replace('{$GLOBALS['_W']['attachurl_remote']}', '{$GLOBALS['_W']['attachurl_local']}') : this.src.replace('{$GLOBALS['_W']['attachurl_local']}', '{$GLOBALS['_W']['attachurl_remote']}');\$(this).data('check-src', true);}});});</script></body>", $str);
    }
    $str = "<?php defined('IN_IA') or exit('Access Denied');?>" . $str;
    return $str;
}
function message($msg,$url='',$code=''){
    // var_dump($code);die();
    if(empty($code)||$code=='error'){
        tp_error($msg,$url);
    }

    if($code=='success'){
        tp_success($msg,$url);
    }
}
/**
 * tp自带跳转
 * @param $string $msg
 * @param unknown $url
 * @param unknown $data
 * @param number $wait
 * @param array $header
 * @throws HttpResponseException
 */
function tp_error($msg = '', $url = null, $data = '', $wait = 3, array $header = []){
    if (is_null($url)) {
        $url = Request::instance()->isAjax() ? '' : 'javascript:history.back(-1);';
    } elseif ('' !== $url && !strpos($url, '://') && 0 !== strpos($url, '/')) {
        $url = Url::build($url);
    }

    $type = Request::instance()->isAjax()
    ? Config::get('default_ajax_return')
    : Config::get('default_return_type');
    $result = [
        'code' => 0,
        'msg'  => $msg,
        'data' => $data,
        'url'  => $url,
        'wait' => $wait,
    ];

    if ('html' == strtolower($type)) {
        $template = Config::get('template');
        $view = Config::get('view_replace_str');

        $result = ViewTemplate::instance($template, $view)
        ->fetch(Config::get('dispatch_error_tmpl'), $result);
    }

    $response = Response::create($result, $type)->header($header);

    throw new HttpResponseException($response);
}
function tp_success($msg = '', $url = null, $data = '', $wait = 3, array $header = [])
{
    if (is_null($url) && !is_null(Request::instance()->server('HTTP_REFERER'))) {
        $url = Request::instance()->server('HTTP_REFERER');
    } elseif ('' !== $url && !strpos($url, '://') && 0 !== strpos($url, '/')) {
        $url = Url::build($url);
    }

    $type = Request::instance()->isAjax()
    ? Config::get('default_ajax_return')
    : Config::get('default_return_type');
    $result = [
        'code' => 1,
        'msg'  => $msg,
        'data' => $data,
        'url'  => $url,
        'wait' => $wait,
    ];

    if ('html' == strtolower($type)) {
        $template = Config::get('template');
        $view = Config::get('view_replace_str');

        $result = ViewTemplate::instance($template, $view)
        ->fetch(Config::get('dispatch_success_tmpl'), $result);
    }

    $response = Response::create($result, $type)->header($header);

    throw new HttpResponseException($response);
}
function pagination($total, $pageIndex, $pageSize = 15, $url = '', $context = array('before' => 5, 'after' => 4, 'ajaxcallback' => '', 'callbackfuncname' => '')) {

global $_W,$_GPC;

    $pdata = array(
        'tcount' => 0,
        'tpage' => 0,
        'cindex' => 0,
        'findex' => 0,
        'pindex' => 0,
        'nindex' => 0,
        'lindex' => 0,
        'options' => ''
    );
    if ($context['ajaxcallback']) {
        $context['isajax'] = true;
    }

    if ($context['callbackfuncname']) {
        $callbackfunc = $context['callbackfuncname'];
    }

    $pdata['tcount'] = $total;
    $pdata['tpage'] = (empty($pageSize) || $pageSize < 0) ? 1 : ceil($total / $pageSize);
    if ($pdata['tpage'] <= 1) {
        return '';
    }

    $cindex = $pageIndex;
    $cindex = min($cindex, $pdata['tpage']);
    $cindex = max($cindex, 1);
    $pdata['cindex'] = $cindex;
    $pdata['findex'] = 1;
    $pdata['pindex'] = $cindex > 1 ? $cindex - 1 : 1;
    $pdata['nindex'] = $cindex < $pdata['tpage'] ? $cindex + 1 : $pdata['tpage'];
    $pdata['lindex'] = $pdata['tpage'];

    //var_dump($baseUrl);die();
    if ($context['isajax']) {
        if (empty($url)) {
            $url = $_W['script_name'] . '?' . http_build_query_tp($_GPC);
        }

        $pdata['faa'] = 'href="javascript:;" page="' . $pdata['findex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['findex'] . '\', this);return false;"' : '');
        $pdata['paa'] = 'href="javascript:;" page="' . $pdata['pindex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['pindex'] . '\', this);return false;"' : '');
        $pdata['naa'] = 'href="javascript:;" page="' . $pdata['nindex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['nindex'] . '\', this);return false;"' : '');
        $pdata['laa'] = 'href="javascript:;" page="' . $pdata['lindex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['lindex'] . '\', this);return false;"' : '');
    } else {
        if ($url) {
            $pdata['faa'] = 'href="?' . str_replace('*', $pdata['findex'], $url) . '"';
            $pdata['paa'] = 'href="?' . str_replace('*', $pdata['pindex'], $url) . '"';
            $pdata['naa'] = 'href="?' . str_replace('*', $pdata['nindex'], $url) . '"';
            $pdata['laa'] = 'href="?' . str_replace('*', $pdata['lindex'], $url) . '"';
        } else {

            $urls = substr($_SERVER["REQUEST_URI"],0,istrripos($_SERVER["REQUEST_URI"],"page/"));

            $_GPC['page'] = $pdata['findex'];
            $pdata['faa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['pindex'];
            $pdata['paa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['nindex'];
            $pdata['naa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['lindex'];
            $pdata['laa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';

            $_GPC['page'] = $pdata['findex'];
            $pdata['faa'] = 'href="'.$urls . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['pindex'];
            $pdata['paa'] = 'href="'.$urls . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['nindex'];
            $pdata['naa'] = 'href="'.$urls . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['lindex'];
            $pdata['laa'] = 'href="'.$urls . http_build_query_tp($_GPC) . '"';

        }
    }



    $html = '<div style="clear:left;float:left"><ul class="pagination pagination-centered">';
    if ($pdata['cindex'] > 1) {
        $html .= "<li><a {$pdata['faa']} class=\"pager-nav\">首页</a></li>";
        $html .= "<li><a {$pdata['paa']} class=\"pager-nav\">&laquo;上一页</a></li>";
    }
    if (!$context['before'] && $context['before'] != 0) {
        $context['before'] = 5;
    }
    if (!$context['after'] && $context['after'] != 0) {
        $context['after'] = 4;
    }

    if ($context['after'] != 0 && $context['before'] != 0) {
        $range = array();
        $range['start'] = max(1, $pdata['cindex'] - $context['before']);
        $range['end'] = min($pdata['tpage'], $pdata['cindex'] + $context['after']);
        if ($range['end'] - $range['start'] < $context['before'] + $context['after']) {
            $range['end'] = min($pdata['tpage'], $range['start'] + $context['before'] + $context['after']);
            $range['start'] = max(1, $range['end'] - $context['before'] - $context['after']);
        }
        for ($i = $range['start']; $i <= $range['end']; $i++) {
            if ($context['isajax']) {
                $aa = 'href="javascript:;" page="' . $i . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $i . '\', this);return false;"' : '');
            } else {
                if ($url) {
                    $aa = 'href="/' . str_replace('*', $i, $url) . '"';
                } else {
                    $urls = substr($_SERVER["REQUEST_URI"],0,istrripos($_SERVER["REQUEST_URI"],"page/"));
                    $_GPC['page'] = $i;
                    $aa = 'href="'.$urls. http_build_query_tp($_GPC) . '"';
                }
            }

	
            $html .= ($i == $pdata['cindex'] ? '<li class="active"><a href="javascript:;">' . $i . '</a></li>' : "<li><a {$aa}>" . $i . '</a></li>');
        }
    }

    if ($pdata['cindex'] < $pdata['tpage']) {
        $html .= "<li><a {$pdata['naa']} class=\"pager-nav\">下一页&raquo;</a></li>";
        $html .= "<li><a {$pdata['laa']} class=\"pager-nav\">尾页</a></li>";
    }
    $html .= '</ul></div>';


    return $html;
	exit;

    global $_W,$_GPC;
    $pdata = array(
        'tcount' => 0,
        'tpage' => 0,
        'cindex' => 0,
        'findex' => 0,
        'pindex' => 0,
        'nindex' => 0,
        'lindex' => 0,
        'options' => ''
    );
    if ($context['ajaxcallback']) {
        $context['isajax'] = true;
    }

    if ($context['callbackfuncname']) {
        $callbackfunc = $context['callbackfuncname'];
    }

    $pdata['tcount'] = $total;
    $pdata['tpage'] = (empty($pageSize) || $pageSize < 0) ? 1 : ceil($total / $pageSize);
    if ($pdata['tpage'] <= 1) {
        return '';
    }
    $cindex = $pageIndex;
    $cindex = min($cindex, $pdata['tpage']);
    $cindex = max($cindex, 1);
    $pdata['cindex'] = $cindex;
    $pdata['findex'] = 1;
    $pdata['pindex'] = $cindex > 1 ? $cindex - 1 : 1;
    $pdata['nindex'] = $cindex < $pdata['tpage'] ? $cindex + 1 : $pdata['tpage'];
    $pdata['lindex'] = $pdata['tpage'];

    //var_dump($baseUrl);die();
    if ($context['isajax']) {
        if (empty($url)) {
            $url = $_W['script_name'] . '?' . http_build_query_tp($_GPC);
        }
        $pdata['faa'] = 'href="javascript:;" page="' . $pdata['findex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['findex'] . '\', this);return false;"' : '');
        $pdata['paa'] = 'href="javascript:;" page="' . $pdata['pindex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['pindex'] . '\', this);return false;"' : '');
        $pdata['naa'] = 'href="javascript:;" page="' . $pdata['nindex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['nindex'] . '\', this);return false;"' : '');
        $pdata['laa'] = 'href="javascript:;" page="' . $pdata['lindex'] . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $pdata['lindex'] . '\', this);return false;"' : '');
    } else {
        if ($url) {
            $pdata['faa'] = 'href="?' . str_replace('*', $pdata['findex'], $url) . '"';
            $pdata['paa'] = 'href="?' . str_replace('*', $pdata['pindex'], $url) . '"';
            $pdata['naa'] = 'href="?' . str_replace('*', $pdata['nindex'], $url) . '"';
            $pdata['laa'] = 'href="?' . str_replace('*', $pdata['lindex'], $url) . '"';
        } else {
            $_GPC['page'] = $pdata['findex'];
            $pdata['faa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['pindex'];
            $pdata['paa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['nindex'];
            $pdata['naa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';
            $_GPC['page'] = $pdata['lindex'];
            $pdata['laa'] = 'href="' . $_W['script_name'] . '?' . http_build_query_tp($_GPC) . '"';
        }
    }

    $html = '<div><ul class="pagination pagination-centered">';
    if ($pdata['cindex'] > 1) {
        $html .= "<li><a {$pdata['faa']} class=\"pager-nav\">首页</a></li>";
        $html .= "<li><a {$pdata['paa']} class=\"pager-nav\">&laquo;上一页</a></li>";
    }
    if (!$context['before'] && $context['before'] != 0) {
        $context['before'] = 5;
    }
    if (!$context['after'] && $context['after'] != 0) {
        $context['after'] = 4;
    }

    if ($context['after'] != 0 && $context['before'] != 0) {
        $range = array();
        $range['start'] = max(1, $pdata['cindex'] - $context['before']);
        $range['end'] = min($pdata['tpage'], $pdata['cindex'] + $context['after']);
        if ($range['end'] - $range['start'] < $context['before'] + $context['after']) {
            $range['end'] = min($pdata['tpage'], $range['start'] + $context['before'] + $context['after']);
            $range['start'] = max(1, $range['end'] - $context['before'] - $context['after']);
        }
        for ($i = $range['start']; $i <= $range['end']; $i++) {
            if ($context['isajax']) {
                $aa = 'href="javascript:;" page="' . $i . '" '. ($callbackfunc ? 'onclick="'.$callbackfunc.'(\'' . $url . '\', \'' . $i . '\', this);return false;"' : '');
            } else {
                if ($url) {
                    $aa = 'href="/' . str_replace('*', $i, $url) . '"';
                } else {
                    $urls = substr($_SERVER["REQUEST_URI"],0,istrripos($_SERVER["REQUEST_URI"],"page/"));
                    $_GPC['page'] = $i;
                    $aa = 'href="'.$urls. http_build_query_tp($_GPC) . '"';
                }
            }
            $html .= ($i == $pdata['cindex'] ? '<li class="active"><a href="javascript:;">' . $i . '</a></li>' : "<li><a {$aa}>" . $i . '</a></li>');
        }
    }

    if ($pdata['cindex'] < $pdata['tpage']) {
        $html .= "<li><a {$pdata['naa']} class=\"pager-nav\">下一页&raquo;</a></li>";
        $html .= "<li><a {$pdata['laa']} class=\"pager-nav\">尾页</a></li>";
    }
    $html .= '</ul></div>';
    return $html;
}
function istrripos($str,$find_str){
    if(strripos($str,$find_str)==false){
        return strlen($str);
    }else{
        return strripos($str,$find_str)-1;
    }
}

function is_error($pay_params){
    if($pay_params['code']==-20){
        return  false;
    }
}
function http_build_query_tp($data){
    $params ='';
    foreach ($data as $k=>$v){
        if(!empty($v)&&$k=='page'){
            $params.='/'.$k.'/'.$v;
        }

    }
    return  $params;
}
function toimage($src){
    $base_url =  base_url();
    if (strexists($src, 'uploads/')) {
        return $base_url . substr($src, strpos($src, 'uploads/'));
    }
    if (strexists($src, 'image/')) {
        return $base_url .'uploads/'. $src;
    }
    return $src;
}
function getContentText($content)
{
    $content_01 = $content;  //从数据库获取富文本content

    $content_02 = htmlspecialchars_decode($content_01);  //把一些预定义的 HTML 实体转换为字符

    $content_03 = str_replace("&nbsp;", "", $content_02); //将空格替换成空

    $contents = strip_tags($content_03);  //函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容

    $con = mb_substr($contents, 0, 50, "utf-8");  //返回字符串中的前100字符串长度的字符

    return $con;
}
function cloud_module($m,$v){
    if(empty($m)||empty($v)){
        return true;
    }
    $cloud_url = "";


}
/**
 * 创建文件
 * @param 路径 $path
 * @return boolean
 */
//判断文件夹是否存在，没有则新建。
if (!function_exists('imkdirs')) {
    function imkdirs($dir, $mode = 0777)
    {
        if (is_dir($dir) || @mkdir($dir, $mode)) {
            return true;
        }
        if (!imkdirs(dirname($dir), $mode)) {
            return false;
        }
        return @mkdir($dir, $mode);
    }
}
