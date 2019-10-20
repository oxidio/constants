<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface MEDIAURLS
{
    /**
     * Media id
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
     * Media url or filename
     *
     * varchar(255)
     */
    public const URL = 'oxurl';

    /**
     * Description (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const DESC = 'oxdesc';

    /**
     * Is oxurl field used for filename or url
     *
     * int(1) = 0
     */
    public const ISUPLOADED = 'oxisuploaded';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}