<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Userpayments
{
    /**
     * Payment id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * User id (oxusers)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * Payment id (oxpayments)
     *
     * char(32)
     */
    public const PAYMENTSID = 'oxpaymentsid';

    /**
     * DYN payment values array as string
     *
     * blob
     */
    public const VALUE = 'oxvalue';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}