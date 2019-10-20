<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface USER
{
    /**
     * User id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Is active
     *
     * tinyint(1) = 1
     */
    public const ACTIVE = 'oxactive';

    /**
     * User rights: user, malladmin
     *
     * char(32)
     */
    public const RIGHTS = 'oxrights';

    /**
     * Shop id (oxshops)
     *
     * int(11) = 1
     */
    public const SHOPID = 'oxshopid';

    /**
     * Username
     *
     * varchar(255)
     */
    public const USERNAME = 'oxusername';

    /**
     * Hashed password
     *
     * varchar(128)
     */
    public const PASSWORD = 'oxpassword';

    /**
     * Password salt
     *
     * char(128)
     */
    public const PASSSALT = 'oxpasssalt';

    /**
     * Customer number
     *
     * int(11)
     */
    public const CUSTNR = 'oxcustnr';

    /**
     * VAT ID No.
     *
     * varchar(255)
     */
    public const USTID = 'oxustid';

    /**
     * Company
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
     * Country id (oxcountry)
     *
     * char(32)
     */
    public const COUNTRYID = 'oxcountryid';

    /**
     * State id (oxstates)
     *
     * varchar(32)
     */
    public const STATEID = 'oxstateid';

    /**
     * ZIP code
     *
     * varchar(16)
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
     * User title (Mr/Mrs)
     *
     * varchar(128)
     */
    public const SAL = 'oxsal';

    /**
     * Credit points
     *
     * int(11) = 0
     */
    public const BONI = 'oxboni';

    /**
     * Creation time
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const CREATE = 'oxcreate';

    /**
     * Registration time
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const REGISTER = 'oxregister';

    /**
     * Personal phone number
     *
     * varchar(64)
     */
    public const PRIVFON = 'oxprivfon';

    /**
     * Mobile phone number
     *
     * varchar(64)
     */
    public const MOBFON = 'oxmobfon';

    /**
     * Birthday date
     *
     * date = 0000-00-00
     */
    public const BIRTHDATE = 'oxbirthdate';

    /**
     * Url
     *
     * varchar(255)
     */
    public const URL = 'oxurl';

    /**
     * Update key
     *
     * varchar(32)
     */
    public const UPDATEKEY = 'oxupdatekey';

    /**
     * Update key expiration time
     *
     * int(11) = 0
     */
    public const UPDATEEXP = 'oxupdateexp';

    /**
     * User points (for registration, invitation, etc)
     *
     * double = 0
     */
    public const POINTS = 'oxpoints';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';
}