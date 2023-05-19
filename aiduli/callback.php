<?php

function ihttp_get($url){
// $url = "https://api.shenjian.io/?appid=49799ab372fc4b4e6bb8e8ad273bdda3&coin=Ethereum&currency=USD";
$curl = curl_init(); // 启动一个CURL会话
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);  // 从证书中检查SSL加密算法是否存在
$tmpInfo = curl_exec($curl);     //返回api的json对象
//关闭URL请求
curl_close($curl);
return $tmpInfo;    //返回json对象
}


$postXml = file_get_contents("php://input"); //接收微信参数 
// 接受不到参数可以使用file_get_contents("php://input"); PHP高版本中$GLOBALS好像已经被废弃了
if (empty($postXml)) {

  return false;
}
  
//将xml格式转换成数组
function xmlToArray($xml) {
  //禁止引用外部xml实体 
  libxml_disable_entity_loader(true);
  $xmlstring = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
  $val = json_decode(json_encode($xmlstring), true);
  return $val;
}
 
$attr = xmlToArray($postXml);
$total_fee = $attr['total_fee'];
$open_id = $attr['openid'];
$out_trade_no = $attr['out_trade_no'];
$time = $attr['time_end'];



ihttp_get('https://'.$_SERVER['SERVER_NAME'].'/index.php?s=/api/api/run/m/xz_aipt/do/Pay_back/uniacid/'.explode('9537', $out_trade_no)[1].'/orderid/'.$out_trade_no);
exit;



?>