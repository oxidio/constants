<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Invitations
{
    /**
     * User id (oxuser), who sent invitation
     *
     * char(32)
     */
     public const USERID = 'oxuserid';

    /**
     * Creation time
     *
     * date
     */
     public const DATE = 'oxdate';

    /**
     * Recipient email
     *
     * varchar(255)
     */
     public const EMAIL = 'oxemail';

    /**
     * Has recipient user registered
     *
     * mediumint(9)
     */
     public const PENDING = 'oxpending';

    /**
     * Is recipient user accepted
     *
     * mediumint(9)
     */
     public const ACCEPTED = 'oxaccepted';

    /**
     * Invitation type
     *
     * tinyint(4) = 1
     */
     public const TYPE = 'oxtype';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}