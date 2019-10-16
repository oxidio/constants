<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Tplblocks
{
    /**
     * Block id
     *
     * char(32)
     */
     public const ID = 'oxid';

    /**
     * Is active
     *
     * tinyint(1) = 1
     */
     public const ACTIVE = 'oxactive';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
     public const SHOPID = 'oxshopid';

    /**
     * Shop theme id
     *
     * char(128)
     */
     public const THEME = 'oxtheme';

    /**
     * Template filename (with rel. path), where block is located
     *
     * char(255)
     */
     public const TEMPLATE = 'oxtemplate';

    /**
     * Block name
     *
     * char(128)
     */
     public const BLOCKNAME = 'oxblockname';

    /**
     * Sorting
     *
     * int(11)
     */
     public const POS = 'oxpos';

    /**
     * Module template filename, where block replacement is located
     *
     * char(255)
     */
     public const FILE = 'oxfile';

    /**
     * Module, which uses this template
     *
     * varchar(100)
     */
     public const MODULE = 'oxmodule';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}