<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/android_privacy_shared_key_google_ad_group.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Android privacy shared key view for Google ad group key.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.AndroidPrivacySharedKeyGoogleAdGroup</code>
 */
class AndroidPrivacySharedKeyGoogleAdGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Android privacy shared key.
     * Android privacy shared key resource names have the form:
     * `customers/{customer_id}/androidPrivacySharedKeyGoogleAdGroups/{campaign_id}~{ad_group_id}~{android_privacy_interaction_type}~{android_privacy_network_type}~{android_privacy_interaction_date(yyyy-mm-dd)}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The campaign ID used in the share key encoding.
     *
     * Generated from protobuf field <code>int64 campaign_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_id = 0;
    /**
     * Output only. The interaction type enum used in the share key encoding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AndroidPrivacyInteractionTypeEnum.AndroidPrivacyInteractionType android_privacy_interaction_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $android_privacy_interaction_type = 0;
    /**
     * Output only. The interaction date used in the shared key encoding in the
     * format of "YYYY-MM-DD" in UTC timezone.
     *
     * Generated from protobuf field <code>string android_privacy_interaction_date = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $android_privacy_interaction_date = '';
    /**
     * Output only. The network type enum used in the share key encoding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AndroidPrivacyNetworkTypeEnum.AndroidPrivacyNetworkType android_privacy_network_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $android_privacy_network_type = 0;
    /**
     * Output only. The ad group ID used in the share key encoding.
     *
     * Generated from protobuf field <code>int64 ad_group_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_group_id = 0;
    /**
     * Output only. 128 bit hex string of the encoded shared ad group key,
     * including a '0x' prefix. This key can be used to do a bitwise OR operator
     * with the aggregate conversion key to create a full aggregation key to
     * retrieve the Aggregate API Report in Android Privacy Sandbox.
     *
     * Generated from protobuf field <code>string shared_ad_group_key = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $shared_ad_group_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the Android privacy shared key.
     *           Android privacy shared key resource names have the form:
     *           `customers/{customer_id}/androidPrivacySharedKeyGoogleAdGroups/{campaign_id}~{ad_group_id}~{android_privacy_interaction_type}~{android_privacy_network_type}~{android_privacy_interaction_date(yyyy-mm-dd)}`
     *     @type int|string $campaign_id
     *           Output only. The campaign ID used in the share key encoding.
     *     @type int $android_privacy_interaction_type
     *           Output only. The interaction type enum used in the share key encoding.
     *     @type string $android_privacy_interaction_date
     *           Output only. The interaction date used in the shared key encoding in the
     *           format of "YYYY-MM-DD" in UTC timezone.
     *     @type int $android_privacy_network_type
     *           Output only. The network type enum used in the share key encoding.
     *     @type int|string $ad_group_id
     *           Output only. The ad group ID used in the share key encoding.
     *     @type string $shared_ad_group_key
     *           Output only. 128 bit hex string of the encoded shared ad group key,
     *           including a '0x' prefix. This key can be used to do a bitwise OR operator
     *           with the aggregate conversion key to create a full aggregation key to
     *           retrieve the Aggregate API Report in Android Privacy Sandbox.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\AndroidPrivacySharedKeyGoogleAdGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Android privacy shared key.
     * Android privacy shared key resource names have the form:
     * `customers/{customer_id}/androidPrivacySharedKeyGoogleAdGroups/{campaign_id}~{ad_group_id}~{android_privacy_interaction_type}~{android_privacy_network_type}~{android_privacy_interaction_date(yyyy-mm-dd)}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the Android privacy shared key.
     * Android privacy shared key resource names have the form:
     * `customers/{customer_id}/androidPrivacySharedKeyGoogleAdGroups/{campaign_id}~{ad_group_id}~{android_privacy_interaction_type}~{android_privacy_network_type}~{android_privacy_interaction_date(yyyy-mm-dd)}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The campaign ID used in the share key encoding.
     *
     * Generated from protobuf field <code>int64 campaign_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * Output only. The campaign ID used in the share key encoding.
     *
     * Generated from protobuf field <code>int64 campaign_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCampaignId($var)
    {
        GPBUtil::checkInt64($var);
        $this->campaign_id = $var;

        return $this;
    }

    /**
     * Output only. The interaction type enum used in the share key encoding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AndroidPrivacyInteractionTypeEnum.AndroidPrivacyInteractionType android_privacy_interaction_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAndroidPrivacyInteractionType()
    {
        return $this->android_privacy_interaction_type;
    }

    /**
     * Output only. The interaction type enum used in the share key encoding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AndroidPrivacyInteractionTypeEnum.AndroidPrivacyInteractionType android_privacy_interaction_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAndroidPrivacyInteractionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\AndroidPrivacyInteractionTypeEnum\AndroidPrivacyInteractionType::class);
        $this->android_privacy_interaction_type = $var;

        return $this;
    }

    /**
     * Output only. The interaction date used in the shared key encoding in the
     * format of "YYYY-MM-DD" in UTC timezone.
     *
     * Generated from protobuf field <code>string android_privacy_interaction_date = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAndroidPrivacyInteractionDate()
    {
        return $this->android_privacy_interaction_date;
    }

    /**
     * Output only. The interaction date used in the shared key encoding in the
     * format of "YYYY-MM-DD" in UTC timezone.
     *
     * Generated from protobuf field <code>string android_privacy_interaction_date = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAndroidPrivacyInteractionDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->android_privacy_interaction_date = $var;

        return $this;
    }

    /**
     * Output only. The network type enum used in the share key encoding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AndroidPrivacyNetworkTypeEnum.AndroidPrivacyNetworkType android_privacy_network_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAndroidPrivacyNetworkType()
    {
        return $this->android_privacy_network_type;
    }

    /**
     * Output only. The network type enum used in the share key encoding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AndroidPrivacyNetworkTypeEnum.AndroidPrivacyNetworkType android_privacy_network_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAndroidPrivacyNetworkType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\AndroidPrivacyNetworkTypeEnum\AndroidPrivacyNetworkType::class);
        $this->android_privacy_network_type = $var;

        return $this;
    }

    /**
     * Output only. The ad group ID used in the share key encoding.
     *
     * Generated from protobuf field <code>int64 ad_group_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getAdGroupId()
    {
        return $this->ad_group_id;
    }

    /**
     * Output only. The ad group ID used in the share key encoding.
     *
     * Generated from protobuf field <code>int64 ad_group_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAdGroupId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ad_group_id = $var;

        return $this;
    }

    /**
     * Output only. 128 bit hex string of the encoded shared ad group key,
     * including a '0x' prefix. This key can be used to do a bitwise OR operator
     * with the aggregate conversion key to create a full aggregation key to
     * retrieve the Aggregate API Report in Android Privacy Sandbox.
     *
     * Generated from protobuf field <code>string shared_ad_group_key = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSharedAdGroupKey()
    {
        return $this->shared_ad_group_key;
    }

    /**
     * Output only. 128 bit hex string of the encoded shared ad group key,
     * including a '0x' prefix. This key can be used to do a bitwise OR operator
     * with the aggregate conversion key to create a full aggregation key to
     * retrieve the Aggregate API Report in Android Privacy Sandbox.
     *
     * Generated from protobuf field <code>string shared_ad_group_key = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSharedAdGroupKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->shared_ad_group_key = $var;

        return $this;
    }

}

