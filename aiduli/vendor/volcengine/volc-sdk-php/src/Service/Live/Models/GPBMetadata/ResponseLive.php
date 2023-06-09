<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: live/response/response_live.proto

namespace Volc\Service\Live\Models\GPBMetadata;

class ResponseLive
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Volc\Service\Base\Models\GPBMetadata\Base::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\Domain::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\VQScore::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\Addr::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\PullToPush::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\DenyConfig::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\RelaySource::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\StreamManage::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\SnapshotManage::initOnce();
        \Volc\Service\Live\Models\GPBMetadata\RecordManage::initOnce();
        $pool->internalAddGeneratedFile(
            '
�(
!live/response/response_live.protoVolcengine.Live.Models.Responselive/business/domain.protolive/business/VQScore.protolive/business/addr.proto live/business/pull_to_push.protolive/business/deny_config.proto live/business/relay_source.proto!live/business/stream_manage.proto#live/business/snapshot_manage.proto!live/business/record_manage.proto"_
CreateDomainResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
ListDomainDetailResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata?
Result (2/.Volcengine.Live.Models.Business.DomainListInfo"`
DisableDomainResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"_
EnableDomainResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"_
DeleteDomainResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
DescribeDomainResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata?
Result (2/.Volcengine.Live.Models.Business.DomainListInfo"l
!ManagerPullPushDomainBindResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
$DescribeLiveStreamInfoByPageResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata?
Result (2/.Volcengine.Live.Models.Business.LiveStreamInfo"�
&DescribeClosedStreamInfoByPageResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataA
Result (21.Volcengine.Live.Models.Business.ClosedStreamInfo"�
DescribeLiveStreamStateResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata@
Result (20.Volcengine.Live.Models.Business.StreamStateInfo"]
KillStreamResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"_
ForbidStreamResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
)DescribeForbiddenStreamInfoByPageResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataD
Result (24.Volcengine.Live.Models.Business.ForbiddenStreamInfo"_
ResumeStreamResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
"DescribeCDNSnapshotHistoryResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataG
Result (27.Volcengine.Live.Models.Business.CDNSnapshotHistoryInfo"�
%DescribeRecordTaskFileHistoryResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataB
Result (22.Volcengine.Live.Models.Business.RecordHistoryInfo"d
UpdateRelaySourceResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"d
DeleteRelaySourceResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
DescribeRelaySourceResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataF
Result (26.Volcengine.Live.Models.Business.RelaySourceConfigList"�
CreateVQScoreTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata:
Result (2*.Volcengine.Live.Models.Business.VQScoreID"�
DescribeVQScoreTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata<
Result (2,.Volcengine.Live.Models.Business.VQScoreInfo"�
ListVQScoreTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataD
Result (24.Volcengine.Live.Models.Business.VQScoreTaskListInfo"�
GeneratePlayURLResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataF
Result (26.Volcengine.Live.Models.Business.GeneratePlayURLResult"�
GeneratePushURLResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataF
Result (26.Volcengine.Live.Models.Business.GeneratePushURLResult"�
CreatePullToPushTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataK
Result (2;.Volcengine.Live.Models.Business.CreatePullToPushTaskResult"�
ListPullToPushTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataI
Result (29.Volcengine.Live.Models.Business.ListPullToPushTaskResult"g
UpdatePullToPushTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"h
RestartPullToPushTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"e
StopPullToPushTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"g
DeletePullToPushTaskResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"c
UpdateDenyConfigResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadata"�
DescribeDenyConfigResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataI
Result (29.Volcengine.Live.Models.Business.DescribeDenyConfigResult"c
DeleteDenyConfigResponseG
ResponseMetadata (2-.Volcengine.Base.Models.Base.ResponseMetadataB�
*com.volcengine.service.live.model.responseBLiveResponsePZBgithub.com/volcengine/volc-sdk-golang/service/live/models/response���!Volc\\Service\\Live\\Models\\Response�$Volc\\Service\\Live\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

