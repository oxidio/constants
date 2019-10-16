<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Actions
{
    /**
     * Action id
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
     * Action type: 0 or 1 - action, 2 - promotion, 3 - banner
     *
     * tinyint(1)
     */
     public const TYPE = 'oxtype';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(128)
     */
     public const TITLE = 'oxtitle';

    /**
     * Long description, used for promotion (multilanguage)
     *
     * text-i18n
     */
     public const LONGDESC = 'oxlongdesc';

    /**
     * Active
     *
     * tinyint(1) = 1
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
     * Picture filename, used for banner (multilanguage)
     *
     * varchar-i18n(128)
     */
     public const PIC = 'oxpic';

    /**
     * Link, used on banner (multilanguage)
     *
     * varchar-i18n(128)
     */
     public const LINK = 'oxlink';

    /**
     * Sorting
     *
     * int(5) = 0
     */
     public const SORT = 'oxsort';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}