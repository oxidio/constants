<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface RATINGS
{
    /**
     * Rating id
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
     * User id (oxuser)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * Rating type (oxarticle, oxrecommlist)
     *
     * enum(12)
     */
    public const TYPE = 'oxtype';

    /**
     * Article or Listmania id (oxarticles or oxrecommlists)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

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