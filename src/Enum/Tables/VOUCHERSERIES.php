<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Coupon series [InnoDB]
 */
interface VOUCHERSERIES
{
    /**
     * Series id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';

    /**
     * Series name
     *
     * varchar(255)
     */
    public const SERIENR = 'oxserienr';

    /**
     * Description
     *
     * varchar(255)
     */
    public const SERIEDESCRIPTION = 'oxseriedescription';

    /**
     * Discount amount
     *
     * float(9) = 0.00
     */
    public const DISCOUNT = 'oxdiscount';

    /**
     * Discount type (percent, absolute)
     *
     * enum(8) = absolute
     */
    public const DISCOUNTTYPE = 'oxdiscounttype';

    /**
     * Valid from
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const BEGINDATE = 'oxbegindate';

    /**
     * Valid to
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ENDDATE = 'oxenddate';

    /**
     * Coupons of this series can be used with single order
     *
     * tinyint(1) = 0
     */
    public const ALLOWSAMESERIES = 'oxallowsameseries';

    /**
     * Coupons of different series can be used with single order
     *
     * tinyint(1) = 0
     */
    public const ALLOWOTHERSERIES = 'oxallowotherseries';

    /**
     * Coupons of this series can be used in multiple orders
     *
     * tinyint(1) = 0
     */
    public const ALLOWUSEANOTHER = 'oxallowuseanother';

    /**
     * Minimum Order Sum 
     *
     * float(9) = 0.00
     */
    public const MINIMUMVALUE = 'oxminimumvalue';

    /**
     * Calculate only once (valid only for product or category vouchers)
     *
     * tinyint(1) = 0
     */
    public const CALCULATEONCE = 'oxcalculateonce';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}