<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Adminlog
{
    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

    /**
     * User id (oxuser)
     *
     * char(32)
     */
     public const USERID = 'oxuserid';

    /**
     * Logged sql
     *
     * text
     */
     public const SQL = 'oxsql';

}