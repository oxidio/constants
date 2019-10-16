<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Accessoire2article
{
    /**
     * Record id
     *
     * char(32)
     */
     public const ID = 'oxid';

    /**
     * Accessory Article id (oxarticles)
     *
     * char(32)
     */
     public const OBJECTID = 'oxobjectid';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
     public const ARTICLENID = 'oxarticlenid';

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