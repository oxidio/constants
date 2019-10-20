<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface STATES
{
    /**
     * State id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Country id (oxcountry)
     *
     * char(32)
     */
    public const COUNTRYID = 'oxcountryid';

    /**
     * Title (multilanguage)
     *
     * char-i18n(128)
     */
    public const TITLE = 'oxtitle';

    /**
     * SEO short name
     *
     * char(2)
     */
    public const ISOALPHA2 = 'oxisoalpha2';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}