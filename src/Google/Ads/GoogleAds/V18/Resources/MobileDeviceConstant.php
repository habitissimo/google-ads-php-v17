<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/mobile_device_constant.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile device constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.MobileDeviceConstant</code>
 */
class MobileDeviceConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the mobile device constant.
     * Mobile device constant resource names have the form:
     * `mobileDeviceConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>optional int64 id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The name of the mobile device.
     *
     * Generated from protobuf field <code>optional string name = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>optional string manufacturer_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manufacturer_name = null;
    /**
     * Output only. The operating system of the mobile device.
     *
     * Generated from protobuf field <code>optional string operating_system_name = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $operating_system_name = null;
    /**
     * Output only. The type of mobile device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.MobileDeviceTypeEnum.MobileDeviceType type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the mobile device constant.
     *           Mobile device constant resource names have the form:
     *           `mobileDeviceConstants/{criterion_id}`
     *     @type int|string $id
     *           Output only. The ID of the mobile device constant.
     *     @type string $name
     *           Output only. The name of the mobile device.
     *     @type string $manufacturer_name
     *           Output only. The manufacturer of the mobile device.
     *     @type string $operating_system_name
     *           Output only. The operating system of the mobile device.
     *     @type int $type
     *           Output only. The type of mobile device.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\MobileDeviceConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the mobile device constant.
     * Mobile device constant resource names have the form:
     * `mobileDeviceConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the mobile device constant.
     * Mobile device constant resource names have the form:
     * `mobileDeviceConstants/{criterion_id}`
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
     * Output only. The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>optional int64 id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the mobile device constant.
     *
     * Generated from protobuf field <code>optional int64 id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. The name of the mobile device.
     *
     * Generated from protobuf field <code>optional string name = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Output only. The name of the mobile device.
     *
     * Generated from protobuf field <code>optional string name = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>optional string manufacturer_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getManufacturerName()
    {
        return isset($this->manufacturer_name) ? $this->manufacturer_name : '';
    }

    public function hasManufacturerName()
    {
        return isset($this->manufacturer_name);
    }

    public function clearManufacturerName()
    {
        unset($this->manufacturer_name);
    }

    /**
     * Output only. The manufacturer of the mobile device.
     *
     * Generated from protobuf field <code>optional string manufacturer_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setManufacturerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->manufacturer_name = $var;

        return $this;
    }

    /**
     * Output only. The operating system of the mobile device.
     *
     * Generated from protobuf field <code>optional string operating_system_name = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOperatingSystemName()
    {
        return isset($this->operating_system_name) ? $this->operating_system_name : '';
    }

    public function hasOperatingSystemName()
    {
        return isset($this->operating_system_name);
    }

    public function clearOperatingSystemName()
    {
        unset($this->operating_system_name);
    }

    /**
     * Output only. The operating system of the mobile device.
     *
     * Generated from protobuf field <code>optional string operating_system_name = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOperatingSystemName($var)
    {
        GPBUtil::checkString($var, True);
        $this->operating_system_name = $var;

        return $this;
    }

    /**
     * Output only. The type of mobile device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.MobileDeviceTypeEnum.MobileDeviceType type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of mobile device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.MobileDeviceTypeEnum.MobileDeviceType type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\MobileDeviceTypeEnum\MobileDeviceType::class);
        $this->type = $var;

        return $this;
    }

}

