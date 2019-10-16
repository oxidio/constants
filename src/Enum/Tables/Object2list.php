<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Object2list
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
     * Listmania id (oxrecommlists)
     *
     * char(32)
     */
     public const LISTID = 'oxlistid';

    /**
     * Description
     *
     * text
     */
     public const DESC = 'oxdesc';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}