<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Userbasketitems
{
    /**
     * Item id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Basket id (oxuserbaskets)
     *
     * char(32)
     */
    public const BASKETID = 'oxbasketid';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const ARTID = 'oxartid';

    /**
     * Amount
     *
     * char(32)
     */
    public const AMOUNT = 'oxamount';

    /**
     * Selection list
     *
     * varchar(255)
     */
    public const SELLIST = 'oxsellist';

    /**
     * Serialized persistent parameters
     *
     * text
     */
    public const PERSPARAM = 'oxpersparam';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}