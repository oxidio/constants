<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Shows many-to-many relationship between delivery cost rules and objects (table determined by oxtype) [InnoDB]
 */
interface O2DELIVERY
{
    /**
     * Record id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Delivery id (oxdelivery)
     *
     * char(32)
     */
    public const DELIVERYID = 'oxdeliveryid';

    /**
     * Object id (table determined by oxtype)
     *
     * char(32)
     */
    public const OBJECTID = 'oxobjectid';

    /**
     * Record type
     *
     * char(32)
     */
    public const TYPE = 'oxtype';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}