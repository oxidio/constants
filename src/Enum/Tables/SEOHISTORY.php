<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Seo urls history. If url does not exists in oxseo, then checks here and redirects [InnoDB]
 */
interface SEOHISTORY
{
    /**
     * Object id
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Hashed url (md5)
     *
     * char(32)
     */
    public const IDENT = 'oxident';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';

    /**
     * Language id
     *
     * int(2) = 0
     */
    public const LANG = 'oxlang';

    /**
     * Hits
     *
     * bigint(20) = 0
     */
    public const HITS = 'oxhits';

    /**
     * Creation time
     *
     * timestamp
     */
    public const INSERT = 'oxinsert';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}