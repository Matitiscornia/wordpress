<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/smart_campaign_setting_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details related to Smart campaigns that have ended.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.SmartCampaignEndedDetails</code>
 */
class SmartCampaignEndedDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The timestamp of when the campaign ended.
     * The timestamp is in the customer’s timezone and in
     * “yyyy-MM-dd HH:mm:ss” format.
     *
     * Generated from protobuf field <code>optional string end_date_time = 1;</code>
     */
    protected $end_date_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $end_date_time
     *           The timestamp of when the campaign ended.
     *           The timestamp is in the customer’s timezone and in
     *           “yyyy-MM-dd HH:mm:ss” format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\SmartCampaignSettingService::initOnce();
        parent::__construct($data);
    }

    /**
     * The timestamp of when the campaign ended.
     * The timestamp is in the customer’s timezone and in
     * “yyyy-MM-dd HH:mm:ss” format.
     *
     * Generated from protobuf field <code>optional string end_date_time = 1;</code>
     * @return string
     */
    public function getEndDateTime()
    {
        return isset($this->end_date_time) ? $this->end_date_time : '';
    }

    public function hasEndDateTime()
    {
        return isset($this->end_date_time);
    }

    public function clearEndDateTime()
    {
        unset($this->end_date_time);
    }

    /**
     * The timestamp of when the campaign ended.
     * The timestamp is in the customer’s timezone and in
     * “yyyy-MM-dd HH:mm:ss” format.
     *
     * Generated from protobuf field <code>optional string end_date_time = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date_time = $var;

        return $this;
    }

}

