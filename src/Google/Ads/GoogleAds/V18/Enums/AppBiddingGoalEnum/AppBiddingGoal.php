<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/app_bidding_goal.proto

namespace Google\Ads\GoogleAds\V18\Enums\AppBiddingGoalEnum;

use UnexpectedValueException;

/**
 * Represents the goal towards which the bidding strategy, of an app
 * campaign, should optimize for.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.AppBiddingGoalEnum.AppBiddingGoal</code>
 */
class AppBiddingGoal
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Represents value unknown in this version of the API.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The bidding strategy of the app campaign should aim to maximize
     * installation of the app.
     *
     * Generated from protobuf enum <code>OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME = 2;</code>
     */
    const OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME = 2;
    /**
     * The bidding strategy of the app campaign should aim to maximize
     * the selected in-app conversions' volume.
     *
     * Generated from protobuf enum <code>OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME = 3;</code>
     */
    const OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME = 3;
    /**
     * The bidding strategy of the app campaign should aim to maximize
     * all conversions' value, that is, install and selected in-app conversions.
     *
     * Generated from protobuf enum <code>OPTIMIZE_FOR_TOTAL_CONVERSION_VALUE = 4;</code>
     */
    const OPTIMIZE_FOR_TOTAL_CONVERSION_VALUE = 4;
    /**
     * The bidding strategy of the app campaign should aim to maximize
     * just the selected in-app conversion's volume, while achieving or
     * exceeding target cost per in-app conversion.
     *
     * Generated from protobuf enum <code>OPTIMIZE_FOR_TARGET_IN_APP_CONVERSION = 5;</code>
     */
    const OPTIMIZE_FOR_TARGET_IN_APP_CONVERSION = 5;
    /**
     * The bidding strategy of the app campaign should aim to maximize
     * all conversions' value, that is, install and selected in-app conversions
     * while achieving or exceeding target return on advertising spend.
     *
     * Generated from protobuf enum <code>OPTIMIZE_FOR_RETURN_ON_ADVERTISING_SPEND = 6;</code>
     */
    const OPTIMIZE_FOR_RETURN_ON_ADVERTISING_SPEND = 6;
    /**
     * This bidding strategy of the app campaign should aim to
     * maximize installation of the app without advertiser-provided target
     * cost-per-install.
     *
     * Generated from protobuf enum <code>OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME_WITHOUT_TARGET_CPI = 7;</code>
     */
    const OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME_WITHOUT_TARGET_CPI = 7;
    /**
     * This bidding strategy of the app campaign should aim to
     * maximize pre-registration of the app.
     *
     * Generated from protobuf enum <code>OPTIMIZE_FOR_PRE_REGISTRATION_CONVERSION_VOLUME = 8;</code>
     */
    const OPTIMIZE_FOR_PRE_REGISTRATION_CONVERSION_VOLUME = 8;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME => 'OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME',
        self::OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME => 'OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME',
        self::OPTIMIZE_FOR_TOTAL_CONVERSION_VALUE => 'OPTIMIZE_FOR_TOTAL_CONVERSION_VALUE',
        self::OPTIMIZE_FOR_TARGET_IN_APP_CONVERSION => 'OPTIMIZE_FOR_TARGET_IN_APP_CONVERSION',
        self::OPTIMIZE_FOR_RETURN_ON_ADVERTISING_SPEND => 'OPTIMIZE_FOR_RETURN_ON_ADVERTISING_SPEND',
        self::OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME_WITHOUT_TARGET_CPI => 'OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME_WITHOUT_TARGET_CPI',
        self::OPTIMIZE_FOR_PRE_REGISTRATION_CONVERSION_VOLUME => 'OPTIMIZE_FOR_PRE_REGISTRATION_CONVERSION_VOLUME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppBiddingGoal::class, \Google\Ads\GoogleAds\V18\Enums\AppBiddingGoalEnum_AppBiddingGoal::class);

