<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Counters
{
    /**
     * Counter id
     *
     * char(32)
     */
    public const IDENT = 'oxident';

    /**
     * Counted number
     *
     * int(11)
     */
    public const COUNT = 'oxcount';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}