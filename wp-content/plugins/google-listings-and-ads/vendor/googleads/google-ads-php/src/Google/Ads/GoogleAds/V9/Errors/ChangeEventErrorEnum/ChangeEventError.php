<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/errors/change_event_error.proto

namespace Google\Ads\GoogleAds\V9\Errors\ChangeEventErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible change event errors.
 *
 * Protobuf type <code>google.ads.googleads.v9.errors.ChangeEventErrorEnum.ChangeEventError</code>
 */
class ChangeEventError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The requested start date is too old. It cannot be older than 30 days.
     *
     * Generated from protobuf enum <code>START_DATE_TOO_OLD = 2;</code>
     */
    const START_DATE_TOO_OLD = 2;
    /**
     * The change_event search request must specify a finite range filter
     * on change_date_time.
     *
     * Generated from protobuf enum <code>CHANGE_DATE_RANGE_INFINITE = 3;</code>
     */
    const CHANGE_DATE_RANGE_INFINITE = 3;
    /**
     * The change event search request has specified invalid date time filters
     * that can never logically produce any valid results (for example, start
     * time after end time).
     *
     * Generated from protobuf enum <code>CHANGE_DATE_RANGE_NEGATIVE = 4;</code>
     */
    const CHANGE_DATE_RANGE_NEGATIVE = 4;
    /**
     * The change_event search request must specify a LIMIT.
     *
     * Generated from protobuf enum <code>LIMIT_NOT_SPECIFIED = 5;</code>
     */
    const LIMIT_NOT_SPECIFIED = 5;
    /**
     * The LIMIT specified by change_event request should be less than or equal
     * to 10K.
     *
     * Generated from protobuf enum <code>INVALID_LIMIT_CLAUSE = 6;</code>
     */
    const INVALID_LIMIT_CLAUSE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::START_DATE_TOO_OLD => 'START_DATE_TOO_OLD',
        self::CHANGE_DATE_RANGE_INFINITE => 'CHANGE_DATE_RANGE_INFINITE',
        self::CHANGE_DATE_RANGE_NEGATIVE => 'CHANGE_DATE_RANGE_NEGATIVE',
        self::LIMIT_NOT_SPECIFIED => 'LIMIT_NOT_SPECIFIED',
        self::INVALID_LIMIT_CLAUSE => 'INVALID_LIMIT_CLAUSE',
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
class_alias(ChangeEventError::class, \Google\Ads\GoogleAds\V9\Errors\ChangeEventErrorEnum_ChangeEventError::class);

