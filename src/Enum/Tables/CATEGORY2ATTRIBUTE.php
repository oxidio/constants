<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface CATEGORY2ATTRIBUTE
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Category id (oxcategories)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Attribute id (oxattributes)
     *
     * char(32)
     */
    public const ATTRID = 'oxattrid';

    /**
     * Sorting
     *
     * int(11) = 9999
     */
    public const SORT = 'oxsort';

    /**
     * Creation time
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}
