<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/campaign_feed.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Resources;

class CampaignFeed
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Cgoogle/ads/googleads/v18/enums/matching_function_context_type.protogoogle.ads.googleads.v18.enums"�
MatchingFunctionContextTypeEnum"t
MatchingFunctionContextType
UNSPECIFIED 
UNKNOWN
FEED_ITEM_ID
DEVICE_NAME
FEED_ITEM_SET_IDB�
"com.google.ads.googleads.v18.enumsB MatchingFunctionContextTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
5google/ads/googleads/v18/enums/feed_link_status.protogoogle.ads.googleads.v18.enums"^
FeedLinkStatusEnum"H
FeedLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v18.enumsBFeedLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
5google/ads/googleads/v18/enums/placeholder_type.protogoogle.ads.googleads.v18.enums"�
PlaceholderTypeEnum"�
PlaceholderType
UNSPECIFIED 
UNKNOWN
SITELINK
CALL
APP
LOCATION
AFFILIATE_LOCATION
CALLOUT
STRUCTURED_SNIPPET
MESSAGE		
PRICE

	PROMOTION
AD_CUSTOMIZER
DYNAMIC_EDUCATION
DYNAMIC_FLIGHT
DYNAMIC_CUSTOM
DYNAMIC_HOTEL
DYNAMIC_REAL_ESTATE
DYNAMIC_TRAVEL
DYNAMIC_LOCAL
DYNAMIC_JOB	
IMAGEB�
"com.google.ads.googleads.v18.enumsBPlaceholderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
?google/ads/googleads/v18/enums/matching_function_operator.protogoogle.ads.googleads.v18.enums"�
MatchingFunctionOperatorEnum"u
MatchingFunctionOperator
UNSPECIFIED 
UNKNOWN
IN
IDENTITY

EQUALS
AND
CONTAINS_ANYB�
"com.google.ads.googleads.v18.enumsBMatchingFunctionOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
7google/ads/googleads/v18/common/matching_function.protogoogle.ads.googleads.v18.common?google/ads/googleads/v18/enums/matching_function_operator.proto"�
MatchingFunction
function_string (	H �g
operator (2U.google.ads.googleads.v18.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator?
left_operands (2(.google.ads.googleads.v18.common.Operand@
right_operands (2(.google.ads.googleads.v18.common.OperandB
_function_string"�
OperandT
constant_operand (28.google.ads.googleads.v18.common.Operand.ConstantOperandH _
feed_attribute_operand (2=.google.ads.googleads.v18.common.Operand.FeedAttributeOperandH T
function_operand (28.google.ads.googleads.v18.common.Operand.FunctionOperandH a
request_context_operand (2>.google.ads.googleads.v18.common.Operand.RequestContextOperandH �
ConstantOperand
string_value (	H 

long_value (H 
boolean_value (H 
double_value (H B
constant_operand_valuen
FeedAttributeOperand
feed_id (H �
feed_attribute_id (H�B

_feed_idB
_feed_attribute_id_
FunctionOperandL
matching_function (21.google.ads.googleads.v18.common.MatchingFunction�
RequestContextOperandq
context_type (2[.google.ads.googleads.v18.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextTypeB
function_argument_operandB�
#com.google.ads.googleads.v18.commonBMatchingFunctionProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/common;common�GAA�Google.Ads.GoogleAds.V18.Common�Google\\Ads\\GoogleAds\\V18\\Common�#Google::Ads::GoogleAds::V18::Commonbproto3
�
6google/ads/googleads/v18/resources/campaign_feed.proto"google.ads.googleads.v18.resources5google/ads/googleads/v18/enums/feed_link_status.proto5google/ads/googleads/v18/enums/placeholder_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignFeedD
resource_name (	B-�A�A\'
%googleads.googleapis.com/CampaignFeed8
feed (	B%�A�A
googleads.googleapis.com/FeedH �@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH�^
placeholder_types (2C.google.ads.googleads.v18.enums.PlaceholderTypeEnum.PlaceholderTypeL
matching_function (21.google.ads.googleads.v18.common.MatchingFunctionV
status (2A.google.ads.googleads.v18.enums.FeedLinkStatusEnum.FeedLinkStatusB�A:i�Af
%googleads.googleapis.com/CampaignFeed=customers/{customer_id}/campaignFeeds/{campaign_id}~{feed_id}B
_feedB
	_campaignB�
&com.google.ads.googleads.v18.resourcesBCampaignFeedProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

