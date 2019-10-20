<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Shows many-to-many relationship between actions and articles [InnoDB]
 */
interface ACTIONS2ARTICLE
{
    /**
     * Record id
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
     * Action id (oxactions)
     *
     * char(32)
     */
    public const ACTIONID = 'oxactionid';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const ARTID = 'oxartid';

    /**
     * Sorting
     *
     * int(11) = 0
     */
    public const SORT = 'oxsort';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}