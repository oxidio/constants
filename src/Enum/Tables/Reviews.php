<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Reviews
{
    /**
     * Review id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Active
     *
     * tinyint(1) = 0
     */
    public const ACTIVE = 'oxactive';

    /**
     * Article or Listmania id (oxarticles or oxrecommlist)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Review type (oxarticle, oxrecommlist)
     *
     * enum(12)
     */
    public const TYPE = 'oxtype';

    /**
     * Review text
     *
     * text
     */
    public const TEXT = 'oxtext';

    /**
     * User id (oxuser)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * Creation time
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const CREATE = 'oxcreate';

    /**
     * Language id
     *
     * tinyint(3) = 0
     */
    public const LANG = 'oxlang';

    /**
     * Rating
     *
     * int(1) = 0
     */
    public const RATING = 'oxrating';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}