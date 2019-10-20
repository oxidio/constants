<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface FILES
{
    /**
     * File id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const ARTID = 'oxartid';

    /**
     * Filename
     *
     * varchar(128)
     */
    public const FILENAME = 'oxfilename';

    /**
     * Hashed filename, used for file directory path creation
     *
     * char(32)
     */
    public const STOREHASH = 'oxstorehash';

    /**
     * Download is available only after purchase
     *
     * tinyint(1) = 1
     */
    public const PURCHASEDONLY = 'oxpurchasedonly';

    /**
     * Maximum count of downloads after order
     *
     * int(11) = -1
     */
    public const MAXDOWNLOADS = 'oxmaxdownloads';

    /**
     * Maximum count of downloads for not registered users after order
     *
     * int(11) = -1
     */
    public const MAXUNREGDOWNLOADS = 'oxmaxunregdownloads';

    /**
     * Expiration time of download link in hours
     *
     * int(11) = -1
     */
    public const LINKEXPTIME = 'oxlinkexptime';

    /**
     * Expiration time of download link after the first download in hours
     *
     * int(11) = -1
     */
    public const DOWNLOADEXPTIME = 'oxdownloadexptime';

    /**
     * Creation time
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}