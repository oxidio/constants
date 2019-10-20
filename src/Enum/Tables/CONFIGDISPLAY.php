<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface CONFIGDISPLAY
{
    /**
     * Config id (extends oxconfig record with this id)
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Module or theme specific config (theme:themename, module:modulename)
     *
     * varchar(100)
     */
    public const CFGMODULE = 'oxcfgmodule';

    /**
     * Variable name
     *
     * varchar(100)
     */
    public const CFGVARNAME = 'oxcfgvarname';

    /**
     * Grouping (groups config fields to array with specified value as key)
     *
     * varchar(255)
     */
    public const GROUPING = 'oxgrouping';

    /**
     * Serialized constraints
     *
     * varchar(255)
     */
    public const VARCONSTRAINT = 'oxvarconstraint';

    /**
     * Sorting
     *
     * int(11) = 0
     */
    public const POS = 'oxpos';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}