<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/ad_group_extension_setting.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad group extension setting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.AdGroupExtensionSetting</code>
 */
class AdGroupExtensionSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the ad group extension setting.
     * AdGroupExtensionSetting resource names have the form:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The extension type of the ad group extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $extension_type = 0;
    /**
     * Immutable. The resource name of the ad group. The linked extension feed
     * items will serve under this ad group. AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>optional string ad_group = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = null;
    /**
     * The resource names of the extension feed items to serve under the ad group.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated string extension_feed_items = 7 [(.google.api.resource_reference) = {</code>
     */
    private $extension_feed_items;
    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     */
    protected $device = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the ad group extension setting.
     *           AdGroupExtensionSetting resource names have the form:
     *           `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *     @type int $extension_type
     *           Immutable. The extension type of the ad group extension setting.
     *     @type string $ad_group
     *           Immutable. The resource name of the ad group. The linked extension feed
     *           items will serve under this ad group. AdGroup resource names have the form:
     *           `customers/{customer_id}/adGroups/{ad_group_id}`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $extension_feed_items
     *           The resource names of the extension feed items to serve under the ad group.
     *           ExtensionFeedItem resource names have the form:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *     @type int $device
     *           The device for which the extensions will serve. Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\AdGroupExtensionSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the ad group extension setting.
     * AdGroupExtensionSetting resource names have the form:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the ad group extension setting.
     * AdGroupExtensionSetting resource names have the form:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Immutable. The extension type of the ad group extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getExtensionType()
    {
        return $this->extension_type;
    }

    /**
     * Immutable. The extension type of the ad group extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setExtensionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\ExtensionTypeEnum\ExtensionType::class);
        $this->extension_type = $var;

        return $this;
    }

    /**
     * Immutable. The resource name of the ad group. The linked extension feed
     * items will serve under this ad group. AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>optional string ad_group = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroup()
    {
        return isset($this->ad_group) ? $this->ad_group : '';
    }

    public function hasAdGroup()
    {
        return isset($this->ad_group);
    }

    public function clearAdGroup()
    {
        unset($this->ad_group);
    }

    /**
     * Immutable. The resource name of the ad group. The linked extension feed
     * items will serve under this ad group. AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>optional string ad_group = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * The resource names of the extension feed items to serve under the ad group.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated string extension_feed_items = 7 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtensionFeedItems()
    {
        return $this->extension_feed_items;
    }

    /**
     * The resource names of the extension feed items to serve under the ad group.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated string extension_feed_items = 7 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtensionFeedItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->extension_feed_items = $arr;

        return $this;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\ExtensionSettingDeviceEnum\ExtensionSettingDevice::class);
        $this->device = $var;

        return $this;
    }

}

