<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface MANUFACTURERS
{
    /**
     * Manufacturer id
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
     * tinyint(1) = 1
     */
    public const ACTIVE = 'oxactive';

    /**
     * Icon filename
     *
     * varchar(128)
     */
    public const ICON = 'oxicon';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * Short description (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const SHORTDESC = 'oxshortdesc';

    /**
     * Show SEO Suffix in Category
     *
     * tinyint(1) = 1
     */
    public const SHOWSUFFIX = 'oxshowsuffix';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}