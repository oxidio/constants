<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Attribute
{
    /**
     * Attribute id
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
     * Title (multilanguage)
     *
     * varchar-i18n(128)
     */
    public const TITLE = 'oxtitle';

    /**
     * Sorting
     *
     * int(11) = 9999
     */
    public const POS = 'oxpos';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

    /**
     * Display attribute`s value for articles in checkout
     *
     * tinyint(1) = 0
     */
    public const DISPLAYINBASKET = 'oxdisplayinbasket';

}