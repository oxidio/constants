<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface SEO
{
    /**
     * Object id
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Hashed seo url (md5)
     *
     * char(32)
     */
    public const IDENT = 'oxident';

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
     * Primary url, not seo encoded
     *
     * varchar(2048)
     */
    public const STDURL = 'oxstdurl';

    /**
     * Old seo url
     *
     * varchar(2048)
     */
    public const SEOURL = 'oxseourl';

    /**
     * Record type
     *
     * enum(14)
     */
    public const TYPE = 'oxtype';

    /**
     * Fixed
     *
     * tinyint(1) = 0
     */
    public const FIXED = 'oxfixed';

    /**
     * Expired
     *
     * tinyint(1) = 0
     */
    public const EXPIRED = 'oxexpired';

    /**
     * Params
     *
     * char(32)
     */
    public const PARAMS = 'oxparams';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}
