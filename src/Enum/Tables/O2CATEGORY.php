<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Shows many-to-many relationship between articles and categories [InnoDB]
 */
interface O2CATEGORY
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Category id (oxcategory)
     *
     * char(32)
     */
    public const CATNID = 'oxcatnid';

    /**
     * Sorting
     *
     * int(11) = 0
     */
    public const POS = 'oxpos';

    /**
     * Creation time
     *
     * int(11) = 0
     */
    public const TIME = 'oxtime';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}