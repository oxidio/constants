<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface SHOPS
{
    /**
     * Shop id
     *
     * int(11) = 1
     */
    public const ID = 'oxid';

    /**
     * Active
     *
     * tinyint(1) = 1
     */
    public const ACTIVE = 'oxactive';

    /**
     * Productive Mode (if 0, debug info displayed)
     *
     * tinyint(1) = 0
     */
    public const PRODUCTIVE = 'oxproductive';

    /**
     * Default currency
     *
     * varchar(32)
     */
    public const DEFCURRENCY = 'oxdefcurrency';

    /**
     * Default language id
     *
     * int(11) = 0
     */
    public const DEFLANGUAGE = 'oxdeflanguage';

    /**
     * Shop name
     *
     * varchar(255)
     */
    public const NAME = 'oxname';

    /**
     * Seo title prefix (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const TITLEPREFIX = 'oxtitleprefix';

    /**
     * Seo title suffix (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const TITLESUFFIX = 'oxtitlesuffix';

    /**
     * Start page title (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const STARTTITLE = 'oxstarttitle';

    /**
     * Informational email address
     *
     * varchar(255)
     */
    public const INFOEMAIL = 'oxinfoemail';

    /**
     * Order email address
     *
     * varchar(255)
     */
    public const ORDEREMAIL = 'oxorderemail';

    /**
     * Owner email address
     *
     * varchar(255)
     */
    public const OWNEREMAIL = 'oxowneremail';

    /**
     * Order email subject (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const ORDERSUBJECT = 'oxordersubject';

    /**
     * Registration email subject (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const REGISTERSUBJECT = 'oxregistersubject';

    /**
     * Forgot password email subject (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const FORGOTPWDSUBJECT = 'oxforgotpwdsubject';

    /**
     * Order sent email subject (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const SENDEDNOWSUBJECT = 'oxsendednowsubject';

    /**
     * SMTP server
     *
     * varchar(255)
     */
    public const SMTP = 'oxsmtp';

    /**
     * SMTP user
     *
     * varchar(128)
     */
    public const SMTPUSER = 'oxsmtpuser';

    /**
     * SMTP password
     *
     * varchar(128)
     */
    public const SMTPPWD = 'oxsmtppwd';

    /**
     * Your company
     *
     * varchar(128)
     */
    public const COMPANY = 'oxcompany';

    /**
     * Street
     *
     * varchar(255)
     */
    public const STREET = 'oxstreet';

    /**
     * ZIP code
     *
     * varchar(255)
     */
    public const ZIP = 'oxzip';

    /**
     * City
     *
     * varchar(255)
     */
    public const CITY = 'oxcity';

    /**
     * Country
     *
     * varchar(255)
     */
    public const COUNTRY = 'oxcountry';

    /**
     * Bank name
     *
     * varchar(255)
     */
    public const BANKNAME = 'oxbankname';

    /**
     * Account Number
     *
     * varchar(255)
     */
    public const BANKNUMBER = 'oxbanknumber';

    /**
     * Routing Number
     *
     * varchar(255)
     */
    public const BANKCODE = 'oxbankcode';

    /**
     * Sales Tax ID
     *
     * varchar(255)
     */
    public const VATNUMBER = 'oxvatnumber';

    /**
     * Tax ID
     *
     * varchar(255)
     */
    public const TAXNUMBER = 'oxtaxnumber';

    /**
     * Bank BIC
     *
     * varchar(255)
     */
    public const BICCODE = 'oxbiccode';

    /**
     * Bank IBAN
     *
     * varchar(255)
     */
    public const IBANNUMBER = 'oxibannumber';

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
     * Phone number
     *
     * varchar(255)
     */
    public const TELEFON = 'oxtelefon';

    /**
     * Fax number
     *
     * varchar(255)
     */
    public const TELEFAX = 'oxtelefax';

    /**
     * Shop url
     *
     * varchar(255)
     */
    public const URL = 'oxurl';

    /**
     * Default category id
     *
     * char(32)
     */
    public const DEFCAT = 'oxdefcat';

    /**
     * CBR
     *
     * varchar(64)
     */
    public const HRBNR = 'oxhrbnr';

    /**
     * District Court
     *
     * varchar(128)
     */
    public const COURT = 'oxcourt';

    /**
     * Adbutler code (belboon.de) - deprecated
     *
     * varchar(64)
     */
    public const ADBUTLERID = 'oxadbutlerid';

    /**
     * Affilinet code (webmasterplan.com) - deprecated
     *
     * varchar(64)
     */
    public const AFFILINETID = 'oxaffilinetid';

    /**
     * Superclix code (superclix.de) - deprecated
     *
     * varchar(64)
     */
    public const SUPERCLICKSID = 'oxsuperclicksid';

    /**
     * Affiliwelt code (affiliwelt.net) - deprecated
     *
     * varchar(64)
     */
    public const AFFILIWELTID = 'oxaffiliweltid';

    /**
     * Affili24 code (affili24.com) - deprecated
     *
     * varchar(64)
     */
    public const AFFILI24ID = 'oxaffili24id';

    /**
     * Shop Edition (CE,PE,EE (@deprecated since v6.0.0-RC.2 (2017-08-24))
     *
     * char(2)
     */
    public const EDITION = 'oxedition';

    /**
     * Shop Version (@deprecated since v6.0.0-RC.2 (2017-08-22))
     *
     * char(16)
     */
    public const VERSION = 'oxversion';

    /**
     * Seo active (multilanguage)
     *
     * tinyint-i18n(1) = 1
     */
    public const SEOACTIVE = 'oxseoactive';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

}
