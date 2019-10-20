<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface ORDERFILES
{
    /**
     * Order file id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Order id (oxorder)
     *
     * char(32)
     */
    public const ORDERID = 'oxorderid';

    /**
     * Filename
     *
     * varchar(128)
     */
    public const FILENAME = 'oxfilename';

    /**
     * File id (oxfiles)
     *
     * char(32)
     */
    public const FILEID = 'oxfileid';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';

    /**
     * Ordered article id (oxorderarticles)
     *
     * char(32)
     */
    public const ORDERARTICLEID = 'oxorderarticleid';

    /**
     * First time downloaded time
     *
     * timestamp = 0000-00-00 00:00:00
     */
    public const FIRSTDOWNLOAD = 'oxfirstdownload';

    /**
     * Last time downloaded time
     *
     * timestamp = 0000-00-00 00:00:00
     */
    public const LASTDOWNLOAD = 'oxlastdownload';

    /**
     * Downloads count
     *
     * int(10)
     */
    public const DOWNLOADCOUNT = 'oxdownloadcount';

    /**
     * Maximum count of downloads
     *
     * int(10)
     */
    public const MAXDOWNLOADCOUNT = 'oxmaxdownloadcount';

    /**
     * Download expiration time in hours
     *
     * int(10)
     */
    public const DOWNLOADEXPIRATIONTIME = 'oxdownloadexpirationtime';

    /**
     * Link expiration time in hours
     *
     * int(10)
     */
    public const LINKEXPIRATIONTIME = 'oxlinkexpirationtime';

    /**
     * Count of resets
     *
     * int(10)
     */
    public const RESETCOUNT = 'oxresetcount';

    /**
     * Download is valid until time specified
     *
     * datetime
     */
    public const VALIDUNTIL = 'oxvaliduntil';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}