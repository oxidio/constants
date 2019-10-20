<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface CATEGORIES
{
    /**
     * Category id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Parent category id
     *
     * char(32) = oxrootid
     */
    public const PARENTID = 'oxparentid';

    /**
     * Used for building category tree
     *
     * int(11) = 0
     */
    public const LEFT = 'oxleft';

    /**
     * Used for building category tree
     *
     * int(11) = 0
     */
    public const RIGHT = 'oxright';

    /**
     * Root category id
     *
     * char(32)
     */
    public const ROOTID = 'oxrootid';

    /**
     * Sorting
     *
     * int(11) = 9999
     */
    public const SORT = 'oxsort';

    /**
     * Active (multilanguage)
     *
     * tinyint-i18n(1) = 1
     */
    public const ACTIVE = 'oxactive';

    /**
     * Hidden (Can be accessed by direct link, but is not visible in lists and menu)
     *
     * tinyint(1) = 0
     */
    public const HIDDEN = 'oxhidden';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(254)
     */
    public const TITLE = 'oxtitle';

    /**
     * Description (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const DESC = 'oxdesc';

    /**
     * Long description (multilanguage)
     *
     * text-i18n
     */
    public const LONGDESC = 'oxlongdesc';

    /**
     * Thumbnail filename (multilanguage)
     *
     * varchar-i18n(128)
     */
    public const THUMB = 'oxthumb';

    /**
     * External link, that if specified is opened instead of category content
     *
     * varchar(255)
     */
    public const EXTLINK = 'oxextlink';

    /**
     * Alternative template filename (if empty, default is used)
     *
     * varchar(128)
     */
    public const TEMPLATE = 'oxtemplate';

    /**
     * Default field for sorting of articles in this category (most of oxarticles fields)
     *
     * varchar(64)
     */
    public const DEFSORT = 'oxdefsort';

    /**
     * Default mode of sorting of articles in this category (0 - asc, 1 - desc)
     *
     * tinyint(1) = 0
     */
    public const DEFSORTMODE = 'oxdefsortmode';

    /**
     * If specified, all articles, with price higher than specified, will be shown in this category
     *
     * double = 0
     */
    public const PRICEFROM = 'oxpricefrom';

    /**
     * If specified, all articles, with price lower than specified, will be shown in this category
     *
     * double = 0
     */
    public const PRICETO = 'oxpriceto';

    /**
     * Icon filename
     *
     * varchar(128)
     */
    public const ICON = 'oxicon';

    /**
     * Promotion icon filename
     *
     * varchar(128)
     */
    public const PROMOICON = 'oxpromoicon';

    /**
     * VAT, used for articles in this category (only if oxarticles.oxvat is not set)
     *
     * float
     */
    public const VAT = 'oxvat';

    /**
     * Skip all negative Discounts for articles in this category (Discounts, Vouchers, Delivery ...)
     *
     * tinyint(1) = 0
     */
    public const SKIPDISCOUNTS = 'oxskipdiscounts';

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
