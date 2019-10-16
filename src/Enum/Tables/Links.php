<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Links
{
    /**
     * Link id
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
     * Active
     *
     * tinyint(1) = 0
     */
     public const ACTIVE = 'oxactive';

    /**
     * Link url
     *
     * varchar(255)
     */
     public const URL = 'oxurl';

    /**
     * Description (multilanguage)
     *
     * text-i18n
     */
     public const URLDESC = 'oxurldesc';

    /**
     * Creation time (set by user)
     *
     * datetime
     */
     public const INSERT = 'oxinsert';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}