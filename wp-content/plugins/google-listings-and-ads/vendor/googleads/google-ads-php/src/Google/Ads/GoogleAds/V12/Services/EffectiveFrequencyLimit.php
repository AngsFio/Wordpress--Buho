<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Effective frequency limit.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.EffectiveFrequencyLimit</code>
 */
class EffectiveFrequencyLimit extends \Google\Protobuf\Internal\Message
{
    /**
     * The highest effective frequency value to include in
     * Forecast.effective_frequency_breakdowns.
     * This field supports frequencies 1-10, inclusive.
     *
     * Generated from protobuf field <code>int32 effective_frequency_breakdown_limit = 1;</code>
     */
    protected $effective_frequency_breakdown_limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $effective_frequency_breakdown_limit
     *           The highest effective frequency value to include in
     *           Forecast.effective_frequency_breakdowns.
     *           This field supports frequencies 1-10, inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The highest effective frequency value to include in
     * Forecast.effective_frequency_breakdowns.
     * This field supports frequencies 1-10, inclusive.
     *
     * Generated from protobuf field <code>int32 effective_frequency_breakdown_limit = 1;</code>
     * @return int
     */
    public function getEffectiveFrequencyBreakdownLimit()
    {
        return $this->effective_frequency_breakdown_limit;
    }

    /**
     * The highest effective frequency value to include in
     * Forecast.effective_frequency_breakdowns.
     * This field supports frequencies 1-10, inclusive.
     *
     * Generated from protobuf field <code>int32 effective_frequency_breakdown_limit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEffectiveFrequencyBreakdownLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->effective_frequency_breakdown_limit = $var;

        return $this;
    }

}

