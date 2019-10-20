<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface DELIVERY
{
    /**
     * Delivery shipping cost rule id
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
     * varchar-i18n(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * Price Surcharge/Reduction type (abs|%)
     *
     * enum(3) = abs
     */
    public const ADDSUMTYPE = 'oxaddsumtype';

    /**
     * Price Surcharge/Reduction amount
     *
     * double = 0
     */
    public const ADDSUM = 'oxaddsum';

    /**
     * Condition type: a - Amount, s - Size, w - Weight, p - Price
     *
     * enum(1) = a
     */
    public const DELTYPE = 'oxdeltype';

    /**
     * Condition param from (e.g. amount from 1)
     *
     * double = 0
     */
    public const PARAM = 'oxparam';

    /**
     * Condition param to (e.g. amount to 10)
     *
     * double = 0
     */
    public const PARAMEND = 'oxparamend';

    /**
     * Calculation Rules: 0 - Once per Cart, 1 - Once for each different product, 2 - For each product
     *
     * tinyint(1) = 0
     */
    public const FIXED = 'oxfixed';

    /**
     * Order of Rules Processing
     *
     * int(11) = 9999
     */
    public const SORT = 'oxsort';

    /**
     * Do not run further rules if this rule is valid and is being run
     *
     * tinyint(1) = 0
     */
    public const FINALIZE = 'oxfinalize';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}
