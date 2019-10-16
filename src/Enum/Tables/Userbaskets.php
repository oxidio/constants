<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Userbaskets
{
    /**
     * Basket id
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
     * Basket title
     *
     * varchar(255)
     */
     public const TITLE = 'oxtitle';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

    /**
     * Is public
     *
     * tinyint(1) = 1
     */
     public const PUBLIC_ = 'oxpublic';

    /**
     * Update timestamp
     *
     * int(11) = 0
     */
     public const UPDATE = 'oxupdate';

}