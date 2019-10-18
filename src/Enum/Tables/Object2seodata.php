<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Object2seodata
{
    /**
     * Objects id
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

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
     * Keywords
     *
     * text
     */
    public const KEYWORDS = 'oxkeywords';

    /**
     * Description
     *
     * text
     */
    public const DESCRIPTION = 'oxdescription';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}