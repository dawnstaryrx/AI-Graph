<?php

function ihttp_get($url){
// $url = "https://api.shenjian.io/?appid=49799ab372fc4b4e6bb8e8ad273bdda3&coin=Ethereum&currency=USD";
$curl = curl_init(); // ����һ��CURL�Ự
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // ����֤����
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);  // ��֤���м��SSL�����㷨�Ƿ����
$tmpInfo = curl_exec($curl);     //����api��json����
//�ر�URL����
curl_close($curl);
return $tmpInfo;    //����json����
}


$postXml = file_get_contents("php://input"); //����΢�Ų��� 
// ���ܲ�����������ʹ��file_get_contents("php://input"); PHP�߰汾��$GLOBALS�����Ѿ���������
if (empty($postXml)) {

  return false;
}
  
//��xml��ʽת��������
function xmlToArray($xml) {
  //��ֹ�����ⲿxmlʵ�� 
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