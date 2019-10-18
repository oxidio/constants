<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Acceptedterms
{
    /**
     * User id (oxuser)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';

    /**
     * Terms version
     *
     * char(32)
     */
    public const TERMVERSION = 'oxtermversion';

    /**
     * Time, when terms were accepted
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ACCEPTEDTIME = 'oxacceptedtime';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}