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
 * EasyShipShipmentStatus.
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
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\Orders\V0\Model;

/**
 * EasyShipShipmentStatus Class Doc Comment.
 *
 * @category Class
 *
 * @description The status of the Amazon Easy Ship order. This property is included only for Amazon Easy Ship orders.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class EasyShipShipmentStatus
{
    /**
     * Possible values of this enum.
     */
    public const PENDING_SCHEDULE = 'PendingSchedule';
    public const PENDING_PICK_UP = 'PendingPickUp';
    public const PENDING_DROP_OFF = 'PendingDropOff';
    public const LABEL_CANCELED = 'LabelCanceled';
    public const PICKED_UP = 'PickedUp';
    public const DROPPED_OFF = 'DroppedOff';
    public const AT_ORIGIN_FC = 'AtOriginFC';
    public const AT_DESTINATION_FC = 'AtDestinationFC';
    public const DELIVERED = 'Delivered';
    public const REJECTED_BY_BUYER = 'RejectedByBuyer';
    public const UNDELIVERABLE = 'Undeliverable';
    public const RETURNING_TO_SELLER = 'ReturningToSeller';
    public const RETURNED_TO_SELLER = 'ReturnedToSeller';
    public const LOST = 'Lost';
    public const OUT_FOR_DELIVERY = 'OutForDelivery';
    public const DAMAGED = 'Damaged';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING_SCHEDULE,
            self::PENDING_PICK_UP,
            self::PENDING_DROP_OFF,
            self::LABEL_CANCELED,
            self::PICKED_UP,
            self::DROPPED_OFF,
            self::AT_ORIGIN_FC,
            self::AT_DESTINATION_FC,
            self::DELIVERED,
            self::REJECTED_BY_BUYER,
            self::UNDELIVERABLE,
            self::RETURNING_TO_SELLER,
            self::RETURNED_TO_SELLER,
            self::LOST,
            self::OUT_FOR_DELIVERY,
            self::DAMAGED,
        ];
    }
}
