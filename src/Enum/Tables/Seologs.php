<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Seologs
{
    /**
     * Primary url, not seo encoded
     *
     * text
     */
    public const STDURL = 'oxstdurl';

    /**
     * Hashed seo url
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
     * int(11)
     */
    public const LANG = 'oxlang';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}