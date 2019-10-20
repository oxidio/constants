<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface O2ATTRIBUTE
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Attribute id (oxattributes)
     *
     * char(32)
     */
    public const ATTRID = 'oxattrid';

    /**
     * Attribute value (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const VALUE = 'oxvalue';

    /**
     * Sorting
     *
     * int(11) = 9999
     */
    public const POS = 'oxpos';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}