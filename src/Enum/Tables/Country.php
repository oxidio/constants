<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface Country
{
    /**
     * Country id
     *
     * char(32)
     */
     public const ID = 'oxid';

    /**
     * Active
     *
     * tinyint(1) = 0
     */
     public const ACTIVE = 'oxactive';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(128)
     */
     public const TITLE = 'oxtitle';

    /**
     * ISO 3166-1 alpha-2
     *
     * char(2)
     */
     public const ISOALPHA2 = 'oxisoalpha2';

    /**
     * ISO 3166-1 alpha-3
     *
     * char(3)
     */
     public const ISOALPHA3 = 'oxisoalpha3';

    /**
     * ISO 3166-1 numeric
     *
     * char(3)
     */
     public const UNNUM3 = 'oxunnum3';

    /**
     * VAT identification number prefix
     *
     * char(2)
     */
     public const VATINPREFIX = 'oxvatinprefix';

    /**
     * Sorting
     *
     * int(11) = 9999
     */
     public const ORDER = 'oxorder';

    /**
     * Short description (multilanguage)
     *
     * varchar-i18n(255)
     */
     public const SHORTDESC = 'oxshortdesc';

    /**
     * Long description (multilanguage)
     *
     * varchar-i18n(255)
     */
     public const LONGDESC = 'oxlongdesc';

    /**
     * Vat status: 0 - Do not bill VAT, 1 - Do not bill VAT only if provided valid VAT ID
     *
     * tinyint(1) = 0
     */
     public const VATSTATUS = 'oxvatstatus';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
     public const TIMESTAMP = 'oxtimestamp';

}