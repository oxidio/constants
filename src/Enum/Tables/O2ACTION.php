<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface O2ACTION
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Action id (oxactions)
     *
     * char(32)
     */
    public const ACTIONID = 'oxactionid';

    /**
     * Object id (table set by oxclass)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Object table name
     *
     * char(32)
     */
    public const CLASS_ = 'oxclass';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}