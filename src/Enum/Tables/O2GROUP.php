<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Shows many-to-many relationship between users and groups [InnoDB]
 */
interface O2GROUP
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
     * User id
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Group id
     *
     * char(32)
     */
    public const GROUPSID = 'oxgroupsid';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}