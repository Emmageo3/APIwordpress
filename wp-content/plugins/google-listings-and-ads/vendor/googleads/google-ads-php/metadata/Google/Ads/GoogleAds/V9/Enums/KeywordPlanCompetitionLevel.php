<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/keyword_plan_competition_level.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class KeywordPlanCompetitionLevel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v9/enums/keyword_plan_competition_level.protogoogle.ads.googleads.v9.enums"}
KeywordPlanCompetitionLevelEnum"Z
KeywordPlanCompetitionLevel
UNSPECIFIED 
UNKNOWN
LOW

MEDIUM
HIGHB�
!com.google.ads.googleads.v9.enumsB KeywordPlanCompetitionLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

