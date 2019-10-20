<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Templates for sending newsletters [InnoDB]
 */
interface NEWSLETTER
{
    /**
     * Newsletter id
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
     * Title
     *
     * varchar(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * HTML template
     *
     * mediumtext
     */
    public const TEMPLATE = 'oxtemplate';

    /**
     * Plain template
     *
     * mediumtext
     */
    public const PLAINTEMPLATE = 'oxplaintemplate';

    /**
     * Subject
     *
     * varchar(255)
     */
    public const SUBJECT = 'oxsubject';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}