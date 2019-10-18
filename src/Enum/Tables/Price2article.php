<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Price2article
{
    /**
     * Record id
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
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const ARTID = 'oxartid';

    /**
     * Price, that will be used for specified article if basket amount is between oxamount and oxamountto
     *
     * double = 0
     */
    public const ADDABS = 'oxaddabs';

    /**
     * Discount, that will be used for specified article if basket amount is between oxamount and oxamountto
     *
     * double = 0
     */
    public const ADDPERC = 'oxaddperc';

    /**
     * Quantity: From
     *
     * double = 0
     */
    public const AMOUNT = 'oxamount';

    /**
     * Quantity: To
     *
     * double = 0
     */
    public const AMOUNTTO = 'oxamountto';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}