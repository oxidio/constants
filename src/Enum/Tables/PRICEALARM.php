<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface PRICEALARM
{
    /**
     * Price alarm id
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
     * User id (oxuser)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * Recipient email
     *
     * varchar(128)
     */
    public const EMAIL = 'oxemail';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const ARTID = 'oxartid';

    /**
     * Expected (user) price, when notification email should be sent
     *
     * double = 0
     */
    public const PRICE = 'oxprice';

    /**
     * Currency
     *
     * varchar(32)
     */
    public const CURRENCY = 'oxcurrency';

    /**
     * Language id
     *
     * int(2) = 0
     */
    public const LANG = 'oxlang';

    /**
     * Creation time
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const INSERT = 'oxinsert';

    /**
     * Time, when notification was sent
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const SENDED = 'oxsended';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}