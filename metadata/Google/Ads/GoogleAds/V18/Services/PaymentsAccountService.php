<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/payments_account_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Services;

class PaymentsAccountService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v18/resources/payments_account.proto"google.ads.googleads.v18.resourcesgoogle/api/resource.proto"�
PaymentsAccountG
resource_name (	B0�A�A*
(googleads.googleapis.com/PaymentsAccount%
payments_account_id (	B�AH �
name	 (	B�AH�
currency_code
 (	B�AH�%
payments_profile_id (	B�AH�/
secondary_payments_profile_id (	B�AH�O
paying_manager_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH�:m�Aj
(googleads.googleapis.com/PaymentsAccount>customers/{customer_id}/paymentsAccounts/{payments_account_id}B
_payments_account_idB
_nameB
_currency_codeB
_payments_profile_idB 
_secondary_payments_profile_idB
_paying_manager_customerB�
&com.google.ads.googleads.v18.resourcesBPaymentsAccountProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3
�
@google/ads/googleads/v18/services/payments_account_service.proto!google.ads.googleads.v18.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.proto"7
ListPaymentsAccountsRequest
customer_id (	B�A"n
ListPaymentsAccountsResponseN
payments_accounts (23.google.ads.googleads.v18.resources.PaymentsAccount2�
PaymentsAccountService�
ListPaymentsAccounts>.google.ads.googleads.v18.services.ListPaymentsAccountsRequest?.google.ads.googleads.v18.services.ListPaymentsAccountsResponse"E�Acustomer_id���1//v18/customers/{customer_id=*}/paymentsAccountsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v18.servicesBPaymentsAccountServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v18/services;services�GAA�!Google.Ads.GoogleAds.V18.Services�!Google\\Ads\\GoogleAds\\V18\\Services�%Google::Ads::GoogleAds::V18::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

