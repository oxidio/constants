<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface News
{
    /**
     * News id
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
     * Is active
     *
     * tinyint-i18n(1) = 1
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
     * Creation date (entered by user)
     *
     * date = 0000-00-00
     */
     public const DATE = 'oxdate';

    /**
     * Short description (multilanguage)
     *
     * varchar-i18n(255)
     */
     public const SHORTDESC = 'oxshortdesc';

    /**
     * Long description (multilanguage)
     *
     * text-i18n
     */
     public const LONGDESC = 'oxlongdesc';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}