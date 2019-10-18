<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Selectlist
{
    /**
     * Selection list id
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
     * Title (multilanguage)
     *
     * varchar-i18n(254)
     */
    public const TITLE = 'oxtitle';

    /**
     * Working Title
     *
     * varchar(255)
     */
    public const IDENT = 'oxident';

    /**
     * List fields, separated by "[field_name]!P![price]__@@[field_name]__@@" (multilanguage)
     *
     * text-i18n
     */
    public const VALDESC = 'oxvaldesc';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}