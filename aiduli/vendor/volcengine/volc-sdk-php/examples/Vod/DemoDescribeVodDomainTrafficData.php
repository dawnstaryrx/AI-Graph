// Code generated by protoc-gen-volcengine-sdk
// source: describeVodDomainTrafficData
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodDescribeVodDomainTrafficDataRequest();
$request->setDomainList("your DomainList");
$request->setStartTime("your StartTime");
$request->setEndTime("your EndTime");
$request->setAggregation(0);
$request->setTrafficType("your TrafficType");


$response = new Volc\Service\Vod\Models\Response\VodDescribeVodDomainTrafficDataResponse();
try {
    $response = $client->describeVodDomainTrafficData($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response != null && $response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString(), "\n";
} else {
    echo $response->serializeToJsonString(), "\n";
}