<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Stores user shipping addresses [InnoDB]
 */
interface ADDRESS
{
    /**
     * Address id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * User id (oxuser)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * User id (oxuser)
     *
     * varchar(32)
     */
    public const ADDRESSUSERID = 'oxaddressuserid';

    /**
     * Company name
     *
     * varchar(255)
     */
    public const COMPANY = 'oxcompany';

    /**
     * First name
     *
     * varchar(255)
     */
    public const FNAME = 'oxfname';

    /**
     * Last name
     *
     * varchar(255)
     */
    public const LNAME = 'oxlname';

    /**
     * Street
     *
     * varchar(255)
     */
    public const STREET = 'oxstreet';

    /**
     * House number
     *
     * varchar(16)
     */
    public const STREETNR = 'oxstreetnr';

    /**
     * Additional info
     *
     * varchar(255)
     */
    public const ADDINFO = 'oxaddinfo';

    /**
     * City
     *
     * varchar(255)
     */
    public const CITY = 'oxcity';

    /**
     * Country name
     *
     * varchar(255)
     */
    public const COUNTRY = 'oxcountry';

    /**
     * Country id (oxcountry)
     *
     * char(32)
     */
    public const COUNTRYID = 'oxcountryid';

    /**
     * State id (oxstate)
     *
     * varchar(32)
     */
    public const STATEID = 'oxstateid';

    /**
     * Zip code
     *
     * varchar(50)
     */
    public const ZIP = 'oxzip';

    /**
     * Phone number
     *
     * varchar(128)
     */
    public const FON = 'oxfon';

    /**
     * Fax number
     *
     * varchar(128)
     */
    public const FAX = 'oxfax';

    /**
     * User title prefix (Mr/Mrs)
     *
     * varchar(128)
     */
    public const SAL = 'oxsal';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}