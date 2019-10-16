<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Payments
{
    /**
     * Payment id
     *
     * char(32)
     */
     public const ID = 'oxid';

    /**
     * Active
     *
     * tinyint(1) = 1
     */
     public const ACTIVE = 'oxactive';

    /**
     * Description (multilanguage)
     *
     * varchar-i18n(128)
     */
     public const DESC = 'oxdesc';

    /**
     * Price Surcharge/Reduction amount
     *
     * double = 0
     */
     public const ADDSUM = 'oxaddsum';

    /**
     * Price Surcharge/Reduction type (abs|%)
     *
     * enum(3) = abs
     */
     public const ADDSUMTYPE = 'oxaddsumtype';

    /**
     * Base of price surcharge/reduction: 1 - Value of all goods in cart, 2 - Discounts, 4 - Vouchers, 8 - Shipping costs, 16 - Gift Wrapping/Greeting Card
     *
     * int(11) = 0
     */
     public const ADDSUMRULES = 'oxaddsumrules';

    /**
     * Minimal Credit Rating 
     *
     * int(11) = 0
     */
     public const FROMBONI = 'oxfromboni';

    /**
     * Purchase Price: From
     *
     * double = 0
     */
     public const FROMAMOUNT = 'oxfromamount';

    /**
     * Purchase Price: To
     *
     * double = 0
     */
     public const TOAMOUNT = 'oxtoamount';

    /**
     * Payment additional fields, separated by "field1__@@field2" (multilanguage)
     *
     * text-i18n
     */
     public const VALDESC = 'oxvaldesc';

    /**
     * Selected as the default method
     *
     * tinyint(1) = 0
     */
     public const CHECKED = 'oxchecked';

    /**
     * Long description (multilanguage)
     *
     * text-i18n
     */
     public const LONGDESC = 'oxlongdesc';

    /**
     * Sorting
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