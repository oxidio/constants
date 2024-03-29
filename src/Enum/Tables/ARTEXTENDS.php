<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Additional information for articles [InnoDB]
 */
interface ARTEXTENDS
{
    /**
     * Article id (extends oxarticles article with this id)
     *
     * char(32)
     */
    public const ID = 'oxid';

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