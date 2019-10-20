<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Listmania [InnoDB]
 */
interface RECOMMLISTS
{
    /**
     * Listmania id
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
     * Author first and last name
     *
     * varchar(255)
     */
    public const AUTHOR = 'oxauthor';

    /**
     * Title
     *
     * varchar(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * Description
     *
     * text
     */
    public const DESC = 'oxdesc';

    /**
     * Rating votes count
     *
     * int(11) = 0
     */
    public const RATINGCNT = 'oxratingcnt';

    /**
     * Rating
     *
     * double = 0
     */
    public const RATING = 'oxrating';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}