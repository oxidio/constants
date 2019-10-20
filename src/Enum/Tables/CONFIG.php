<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Shop configuration values [InnoDB]
 */
interface CONFIG
{
    /**
     * Config id
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
     * Module or theme specific config (theme:themename, module:modulename)
     *
     * varchar(100)
     */
    public const MODULE = 'oxmodule';

    /**
     * Variable name
     *
     * varchar(100)
     */
    public const VARNAME = 'oxvarname';

    /**
     * Variable type
     *
     * varchar(16)
     */
    public const VARTYPE = 'oxvartype';

    /**
     * Variable value
     *
     * mediumblob
     */
    public const VARVALUE = 'oxvarvalue';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}