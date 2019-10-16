<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Groups
{
    /**
     * Group id
     *
     * char(32)
     */
     public const ID = 'oxid';

    /**
     * Active
     *
     * tinyint(1) = 1
     */
     public const ACTIVE = 'oxactive';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(128)
     */
     public const TITLE = 'oxtitle';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}