<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface DELIVERYSET
{
    /**
     * Delivery method id
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
     * Active from specified date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ACTIVEFROM = 'oxactivefrom';

    /**
     * Active to specified date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ACTIVETO = 'oxactiveto';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * Sorting
     *
     * int(11) = 0
     */
    public const POS = 'oxpos';

    /**
     * Creation time
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}
