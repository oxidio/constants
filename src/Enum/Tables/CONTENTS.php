<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface CONTENTS
{
    /**
     * Content id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Id, specified by admin and can be used instead of oxid
     *
     * char(32)
     */
    public const LOADID = 'oxloadid';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';

    /**
     * Snippet (can be included to other oxcontents records)
     *
     * tinyint(1) = 1
     */
    public const SNIPPET = 'oxsnippet';

    /**
     * Type: 0 - Snippet, 1 - Upper Menu, 2 - Category, 3 - Manual
     *
     * tinyint(1) = 0
     */
    public const TYPE = 'oxtype';

    /**
     * Active (multilanguage)
     *
     * tinyint-i18n(1) = 0
     */
    public const ACTIVE = 'oxactive';

    /**
     * Position
     *
     * varchar(32)
     */
    public const POSITION = 'oxposition';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * Content (multilanguage)
     *
     * text-i18n
     */
    public const CONTENT = 'oxcontent';

    /**
     * Category id (oxcategories), used only when type = 2
     *
     * varchar(32)
     */
    public const CATID = 'oxcatid';

    /**
     * Content Folder (available options at oxconfig.OXVARNAME = aCMSfolder)
     *
     * varchar(32)
     */
    public const FOLDER = 'oxfolder';

    /**
     * Term and Conditions version (used only when OXLOADID = oxagb)
     *
     * char(32)
     */
    public const TERMVERSION = 'oxtermversion';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}