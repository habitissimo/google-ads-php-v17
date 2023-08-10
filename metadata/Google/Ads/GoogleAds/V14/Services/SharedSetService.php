<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/shared_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Services;

class SharedSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v14/enums/shared_set_type.protogoogle.ads.googleads.v14.enums"�
SharedSetTypeEnum"�
SharedSetType
UNSPECIFIED 
UNKNOWN
NEGATIVE_KEYWORDS
NEGATIVE_PLACEMENTS#
ACCOUNT_LEVEL_NEGATIVE_KEYWORDSB�
"com.google.ads.googleads.v14.enumsBSharedSetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
6google/ads/googleads/v14/enums/shared_set_status.protogoogle.ads.googleads.v14.enums"`
SharedSetStatusEnum"I
SharedSetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v14.enumsBSharedSetStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
3google/ads/googleads/v14/resources/shared_set.proto"google.ads.googleads.v14.resources4google/ads/googleads/v14/enums/shared_set_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
	SharedSetA
resource_name (	B*�A�A$
"googleads.googleapis.com/SharedSet
id (B�AH �R
type (2?.google.ads.googleads.v14.enums.SharedSetTypeEnum.SharedSetTypeB�A
name	 (	H�X
status (2C.google.ads.googleads.v14.enums.SharedSetStatusEnum.SharedSetStatusB�A
member_count
 (B�AH�!
reference_count (B�AH�:[�AX
"googleads.googleapis.com/SharedSet2customers/{customer_id}/sharedSets/{shared_set_id}B
_idB
_nameB
_member_countB
_reference_countB�
&com.google.ads.googleads.v14.resourcesBSharedSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3
�
:google/ads/googleads/v14/enums/response_content_type.protogoogle.ads.googleads.v14.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v14.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
:google/ads/googleads/v14/services/shared_set_service.proto!google.ads.googleads.v14.services3google/ads/googleads/v14/resources/shared_set.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateSharedSetsRequest
customer_id (	B�AN

operations (25.google.ads.googleads.v14.services.SharedSetOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v14.enums.ResponseContentTypeEnum.ResponseContentType"�
SharedSetOperation/
update_mask (2.google.protobuf.FieldMask?
create (2-.google.ads.googleads.v14.resources.SharedSetH ?
update (2-.google.ads.googleads.v14.resources.SharedSetH 9
remove (	B\'�A$
"googleads.googleapis.com/SharedSetH B
	operation"�
MutateSharedSetsResponse1
partial_failure_error (2.google.rpc.StatusI
results (28.google.ads.googleads.v14.services.MutateSharedSetResult"�
MutateSharedSetResult>
resource_name (	B\'�A$
"googleads.googleapis.com/SharedSetA

shared_set (2-.google.ads.googleads.v14.resources.SharedSet2�
SharedSetService�
MutateSharedSets:.google.ads.googleads.v14.services.MutateSharedSetsRequest;.google.ads.googleads.v14.services.MutateSharedSetsResponse"T���5"0/v14/customers/{customer_id=*}/sharedSets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v14.servicesBSharedSetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v14/services;services�GAA�!Google.Ads.GoogleAds.V14.Services�!Google\\Ads\\GoogleAds\\V14\\Services�%Google::Ads::GoogleAds::V14::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

