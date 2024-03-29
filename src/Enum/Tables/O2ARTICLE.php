<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Shows many-to-many relationship between cross-selling articles [InnoDB]
 */
interface O2ARTICLE
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Cross-selling Article id (oxarticles)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Main Article id (oxarticles)
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