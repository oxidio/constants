<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface NEWSSUBSCRIBED
{
    /**
     * Subscription id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * User id (oxuser)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * User title prefix (Mr/Mrs)
     *
     * varchar(64)
     */
    public const SAL = 'oxsal';

    /**
     * First name
     *
     * char(128)
     */
    public const FNAME = 'oxfname';

    /**
     * Last name
     *
     * char(128)
     */
    public const LNAME = 'oxlname';

    /**
     * Email
     *
     * char(128)
     */
    public const EMAIL = 'oxemail';

    /**
     * Subscription status: 0 - not subscribed, 1 - subscribed, 2 - not confirmed
     *
     * tinyint(1) = 0
     */
    public const DBOPTIN = 'oxdboptin';

    /**
     * Subscription email sending status
     *
     * tinyint(1) = 0
     */
    public const EMAILFAILED = 'oxemailfailed';

    /**
     * Subscription date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const SUBSCRIBED = 'oxsubscribed';

    /**
     * Unsubscription date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const UNSUBSCRIBED = 'oxunsubscribed';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';
}