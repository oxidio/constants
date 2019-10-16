<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Vouchers
{
    /**
     * Date, when coupon was used (set on order complete)
     *
     * date
     */
     public const DATEUSED = 'oxdateused';

    /**
     * Order id (oxorder)
     *
     * char(32)
     */
     public const ORDERID = 'oxorderid';

    /**
     * User id (oxuser)
     *
     * char(32)
     */
     public const USERID = 'oxuserid';

    /**
     * Time, when coupon is added to basket
     *
     * int(11) = 0
     */
     public const RESERVED = 'oxreserved';

    /**
     * Coupon number
     *
     * varchar(255)
     */
     public const VOUCHERNR = 'oxvouchernr';

    /**
     * Coupon Series id (oxvoucherseries)
     *
     * char(32)
     */
     public const VOUCHERSERIEID = 'oxvoucherserieid';

    /**
     * Discounted amount (if discount was used)
     *
     * float(9)
     */
     public const DISCOUNT = 'oxdiscount';

    /**
     * Coupon id
     *
     * char(32)
     */
     public const ID = 'oxid';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}