<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface DEL2DELSET
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Shipping cost rule id (oxdelivery)
     *
     * char(32)
     */
    public const DELID = 'oxdelid';

    /**
     * Delivery method id (oxdeliveryset)
     *
     * char(32)
     */
    public const DELSETID = 'oxdelsetid';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}