<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface WRAPPING
{
    /**
     * Wrapping id
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
     * Active (multilanguage)
     *
     * tinyint-i18n(1) = 1
     */
    public const ACTIVE = 'oxactive';

    /**
     * Wrapping type: WRAP,CARD
     *
     * varchar(4) = WRAP
     */
    public const TYPE = 'oxtype';

    /**
     * Name (multilanguage)
     *
     * varchar-i18n(128)
     */
    public const NAME = 'oxname';

    /**
     * Image filename
     *
     * varchar(128)
     */
    public const PIC = 'oxpic';

    /**
     * Price
     *
     * double = 0
     */
    public const PRICE = 'oxprice';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}