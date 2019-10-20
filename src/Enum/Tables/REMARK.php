<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface REMARK
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * User id (oxuser)
     *
     * char(32)
     */
    public const PARENTID = 'oxparentid';

    /**
     * Record type: o - order, r - remark, n - newsletter, c - registration
     *
     * enum(1) = r
     */
    public const TYPE = 'oxtype';

    /**
     * Header (default: Creation time)
     *
     * varchar(255)
     */
    public const HEADER = 'oxheader';

    /**
     * Remark text
     *
     * text
     */
    public const TEXT = 'oxtext';

    /**
     * Creation time
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const CREATE = 'oxcreate';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}