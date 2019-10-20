<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface DISCOUNT
{
    /**
     * Discount id
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
     * Active
     *
     * tinyint(1) = 0
     */
    public const ACTIVE = 'oxactive';

    /**
     * Active from specified date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ACTIVEFROM = 'oxactivefrom';

    /**
     * Active to specified date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ACTIVETO = 'oxactiveto';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(128)
     */
    public const TITLE = 'oxtitle';

    /**
     * Valid from specified amount of articles
     *
     * double = 0
     */
    public const AMOUNT = 'oxamount';

    /**
     * Valid to specified amount of articles
     *
     * double = 999999
     */
    public const AMOUNTTO = 'oxamountto';

    /**
     * Valid to specified purchase price
     *
     * double = 999999
     */
    public const PRICETO = 'oxpriceto';

    /**
     * Valid from specified purchase price
     *
     * double = 0
     */
    public const PRICE = 'oxprice';

    /**
     * Discount type (%,abs,itm)
     *
     * enum(3) = %
     */
    public const ADDSUMTYPE = 'oxaddsumtype';

    /**
     * Magnitude of the discount
     *
     * double = 0
     */
    public const ADDSUM = 'oxaddsum';

    /**
     * Free article id, that will be added as a discount
     *
     * char(32)
     */
    public const ITMARTID = 'oxitmartid';

    /**
     * The quantity of free article that will be added to basket with discounted article
     *
     * double = 1
     */
    public const ITMAMOUNT = 'oxitmamount';

    /**
     * Should free article amount be multiplied by discounted item quantity in basket
     *
     * int(1) = 0
     */
    public const ITMMULTIPLE = 'oxitmmultiple';

    /**
     * Defines the order discounts are applied to basket or product
     *
     * int(5) = 0
     */
    public const SORT = 'oxsort';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}