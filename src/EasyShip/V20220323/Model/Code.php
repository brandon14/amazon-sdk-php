<?php

/**
 * This file is part of the trollandtoad/amazon-sdk-php package.
 *
 * MIT License
 *
 * Copyright (c) 2022 Brandon Clothier
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

declare(strict_types=1);

/**
 * Code.
 *
 * PHP version ^7.2 || ^8.0
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Easy Ship.
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * OpenAPI spec version: 2022-03-23
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\EasyShip\V20220323\Model;

/**
 * Code Class Doc Comment.
 *
 * @category Class
 *
 * @description An error code that identifies the type of error that occurred. The error codes listed below are specific to the Easy Ship section.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Code
{
    /**
     * Possible values of this enum.
     */
    public const INVALID_INPUT = 'InvalidInput';
    public const INVALID_TIME_SLOT_ID = 'InvalidTimeSlotId';
    public const SCHEDULED_PACKAGE_ALREADY_EXISTS = 'ScheduledPackageAlreadyExists';
    public const SCHEDULE_WINDOW_EXPIRED = 'ScheduleWindowExpired';
    public const RETRYABLE_AFTER_GETTING_NEW_SLOTS = 'RetryableAfterGettingNewSlots';
    public const TIME_SLOT_NOT_AVAILABLE = 'TimeSlotNotAvailable';
    public const RESOURCE_NOT_FOUND = 'ResourceNotFound';
    public const INVALID_ORDER_STATE = 'InvalidOrderState';
    public const REGION_NOT_SUPPORTED = 'RegionNotSupported';
    public const ORDER_NOT_ELIGIBLE_FOR_RESCHEDULING = 'OrderNotEligibleForRescheduling';
    public const INTERNAL_SERVER_ERROR = 'InternalServerError';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_INPUT,
            self::INVALID_TIME_SLOT_ID,
            self::SCHEDULED_PACKAGE_ALREADY_EXISTS,
            self::SCHEDULE_WINDOW_EXPIRED,
            self::RETRYABLE_AFTER_GETTING_NEW_SLOTS,
            self::TIME_SLOT_NOT_AVAILABLE,
            self::RESOURCE_NOT_FOUND,
            self::INVALID_ORDER_STATE,
            self::REGION_NOT_SUPPORTED,
            self::ORDER_NOT_ELIGIBLE_FOR_RESCHEDULING,
            self::INTERNAL_SERVER_ERROR,
        ];
    }
}
