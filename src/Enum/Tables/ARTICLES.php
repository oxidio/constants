<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

interface ARTICLES
{
    /**
     * Article id
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
     * Parent article id
     *
     * char(32)
     */
    public const PARENTID = 'oxparentid';

    /**
     * Active
     *
     * tinyint(1) = 1
     */
    public const ACTIVE = 'oxactive';

    /**
     * Hidden
     *
     * tinyint(1) = 0
     */
    public const HIDDEN = 'oxhidden';

    /**
     * Active from specified date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ACTIVEFROM = 'oxactivefrom';

    /**
     * Active to specified date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ACTIVETO = 'oxactiveto';

    /**
     * Article number
     *
     * varchar(255)
     */
    public const ARTNUM = 'oxartnum';

    /**
     * International Article Number (EAN)
     *
     * varchar(128)
     */
    public const EAN = 'oxean';

    /**
     * Manufacture International Article Number (Man. EAN)
     *
     * varchar(128)
     */
    public const DISTEAN = 'oxdistean';

    /**
     * Manufacture Part Number (MPN)
     *
     * varchar(100)
     */
    public const MPN = 'oxmpn';

    /**
     * Title (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * Short description (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const SHORTDESC = 'oxshortdesc';

    /**
     * Article Price
     *
     * double = 0
     */
    public const PRICE = 'oxprice';

    /**
     * No Promotions (Price Alert) 
     *
     * tinyint(1) = 0
     */
    public const BLFIXEDPRICE = 'oxblfixedprice';

    /**
     * Price A
     *
     * double = 0
     */
    public const PRICEA = 'oxpricea';

    /**
     * Price B
     *
     * double = 0
     */
    public const PRICEB = 'oxpriceb';

    /**
     * Price C
     *
     * double = 0
     */
    public const PRICEC = 'oxpricec';

    /**
     * Purchase Price
     *
     * double = 0
     */
    public const BPRICE = 'oxbprice';

    /**
     * Recommended Retail Price (RRP)
     *
     * double = 0
     */
    public const TPRICE = 'oxtprice';

    /**
     * Unit name (kg,g,l,cm etc), used in setting price per quantity unit calculation
     *
     * varchar(32)
     */
    public const UNITNAME = 'oxunitname';

    /**
     * Article quantity, used in setting price per quantity unit calculation
     *
     * double = 0
     */
    public const UNITQUANTITY = 'oxunitquantity';

    /**
     * External URL to other information about the article
     *
     * varchar(255)
     */
    public const EXTURL = 'oxexturl';

    /**
     * Text for external URL (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const URLDESC = 'oxurldesc';

    /**
     * External URL image
     *
     * varchar(128)
     */
    public const URLIMG = 'oxurlimg';

    /**
     * Value added tax. If specified, used in all calculations instead of global vat
     *
     * float
     */
    public const VAT = 'oxvat';

    /**
     * Thumbnail filename
     *
     * varchar(128)
     */
    public const THUMB = 'oxthumb';

    /**
     * Icon filename
     *
     * varchar(128)
     */
    public const ICON = 'oxicon';

    /**
     * 1# Picture filename
     *
     * varchar(128)
     */
    public const PIC1 = 'oxpic1';

    /**
     * 2# Picture filename
     *
     * varchar(128)
     */
    public const PIC2 = 'oxpic2';

    /**
     * 3# Picture filename
     *
     * varchar(128)
     */
    public const PIC3 = 'oxpic3';

    /**
     * 4# Picture filename
     *
     * varchar(128)
     */
    public const PIC4 = 'oxpic4';

    /**
     * 5# Picture filename
     *
     * varchar(128)
     */
    public const PIC5 = 'oxpic5';

    /**
     * 6# Picture filename
     *
     * varchar(128)
     */
    public const PIC6 = 'oxpic6';

    /**
     * 7# Picture filename
     *
     * varchar(128)
     */
    public const PIC7 = 'oxpic7';

    /**
     * 8# Picture filename
     *
     * varchar(128)
     */
    public const PIC8 = 'oxpic8';

    /**
     * 9# Picture filename
     *
     * varchar(128)
     */
    public const PIC9 = 'oxpic9';

    /**
     * 10# Picture filename
     *
     * varchar(128)
     */
    public const PIC10 = 'oxpic10';

    /**
     * 11# Picture filename
     *
     * varchar(128)
     */
    public const PIC11 = 'oxpic11';

    /**
     * 12# Picture filename
     *
     * varchar(128)
     */
    public const PIC12 = 'oxpic12';

    /**
     * Weight (kg)
     *
     * double = 0
     */
    public const WEIGHT = 'oxweight';

    /**
     * Article quantity in stock
     *
     * double = 0
     */
    public const STOCK = 'oxstock';

    /**
     * Delivery Status: 1 - Standard, 2 - If out of Stock, offline, 3 - If out of Stock, not orderable, 4 - External Storehouse
     *
     * tinyint(1) = 1
     */
    public const STOCKFLAG = 'oxstockflag';

    /**
     * Message, which is shown if the article is in stock (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const STOCKTEXT = 'oxstocktext';

    /**
     * Message, which is shown if the article is off stock (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const NOSTOCKTEXT = 'oxnostocktext';

    /**
     * Date, when the product will be available again if it is sold out
     *
     * date = 0000-00-00
     */
    public const DELIVERY = 'oxdelivery';

    /**
     * Creation time
     *
     * date = 0000-00-00
     */
    public const INSERT = 'oxinsert';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

    /**
     * Article dimensions: Length
     *
     * double = 0
     */
    public const LENGTH = 'oxlength';

    /**
     * Article dimensions: Width
     *
     * double = 0
     */
    public const WIDTH = 'oxwidth';

    /**
     * Article dimensions: Height
     *
     * double = 0
     */
    public const HEIGHT = 'oxheight';

    /**
     * File, shown in article media list
     *
     * varchar(128)
     */
    public const FILE = 'oxfile';

    /**
     * Search terms (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const SEARCHKEYS = 'oxsearchkeys';

    /**
     * Alternative template filename (if empty, default is used)
     *
     * varchar(128)
     */
    public const TEMPLATE = 'oxtemplate';

    /**
     * E-mail for question
     *
     * varchar(255)
     */
    public const QUESTIONEMAIL = 'oxquestionemail';

    /**
     * Should article be shown in search
     *
     * tinyint(1) = 1
     */
    public const ISSEARCH = 'oxissearch';

    /**
     * Can article be customized
     *
     * tinyint(4) = 0
     */
    public const ISCONFIGURABLE = 'oxisconfigurable';

    /**
     * Name of variants selection lists (different lists are separated by | ) (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const VARNAME = 'oxvarname';

    /**
     * Sum of active article variants stock quantity
     *
     * int(5) = 0
     */
    public const VARSTOCK = 'oxvarstock';

    /**
     * Total number of variants that article has (active and inactive)
     *
     * int(1) = 0
     */
    public const VARCOUNT = 'oxvarcount';

    /**
     * Variant article selections (separated by | ) (multilanguage)
     *
     * varchar-i18n(255)
     */
    public const VARSELECT = 'oxvarselect';

    /**
     * Lowest price in active article variants
     *
     * double = 0
     */
    public const VARMINPRICE = 'oxvarminprice';

    /**
     * Highest price in active article variants
     *
     * double = 0
     */
    public const VARMAXPRICE = 'oxvarmaxprice';

    /**
     * Bundled article id
     *
     * varchar(32)
     */
    public const BUNDLEID = 'oxbundleid';

    /**
     * Folder
     *
     * varchar(32)
     */
    public const FOLDER = 'oxfolder';

    /**
     * Subclass
     *
     * varchar(32)
     */
    public const SUBCLASS = 'oxsubclass';

    /**
     * Sorting
     *
     * int(5) = 0
     */
    public const SORT = 'oxsort';

    /**
     * Amount of sold articles including variants (used only for parent articles)
     *
     * double = 0
     */
    public const SOLDAMOUNT = 'oxsoldamount';

    /**
     * Intangible article, free shipping is used (variants inherits parent setting)
     *
     * int(1) = 0
     */
    public const NONMATERIAL = 'oxnonmaterial';

    /**
     * Free shipping (variants inherits parent setting)
     *
     * int(1) = 0
     */
    public const FREESHIPPING = 'oxfreeshipping';

    /**
     * Enables sending of notification email when oxstock field value falls below oxremindamount value
     *
     * int(1) = 0
     */
    public const REMINDACTIVE = 'oxremindactive';

    /**
     * Defines the amount, below which notification email will be sent if oxremindactive is set to 1
     *
     * double = 0
     */
    public const REMINDAMOUNT = 'oxremindamount';

    /**
     * 
     *
     * varchar(32)
     */
    public const AMITEMID = 'oxamitemid';

    /**
     * 
     *
     * varchar(16) = 0
     */
    public const AMTASKID = 'oxamtaskid';

    /**
     * Vendor id (oxvendor)
     *
     * char(32)
     */
    public const VENDORID = 'oxvendorid';

    /**
     * Manufacturer id (oxmanufacturers)
     *
     * char(32)
     */
    public const MANUFACTURERID = 'oxmanufacturerid';

    /**
     * Skips all negative Discounts (Discounts, Vouchers, Delivery ...)
     *
     * tinyint(1) = 0
     */
    public const SKIPDISCOUNTS = 'oxskipdiscounts';

    /**
     * Article rating
     *
     * double = 0
     */
    public const RATING = 'oxrating';

    /**
     * Rating votes count
     *
     * int(11) = 0
     */
    public const RATINGCNT = 'oxratingcnt';

    /**
     * Minimal delivery time (unit is set in oxdeltimeunit)
     *
     * int(11) = 0
     */
    public const MINDELTIME = 'oxmindeltime';

    /**
     * Maximum delivery time (unit is set in oxdeltimeunit)
     *
     * int(11) = 0
     */
    public const MAXDELTIME = 'oxmaxdeltime';

    /**
     * Delivery time unit: DAY, WEEK, MONTH
     *
     * varchar(255)
     */
    public const DELTIMEUNIT = 'oxdeltimeunit';

    /**
     * If not 0, oxprice will be updated to this value on oxupdatepricetime date
     *
     * double = 0
     */
    public const UPDATEPRICE = 'oxupdateprice';

    /**
     * If not 0, oxpricea will be updated to this value on oxupdatepricetime date
     *
     * double = 0
     */
    public const UPDATEPRICEA = 'oxupdatepricea';

    /**
     * If not 0, oxpriceb will be updated to this value on oxupdatepricetime date
     *
     * double = 0
     */
    public const UPDATEPRICEB = 'oxupdatepriceb';

    /**
     * If not 0, oxpricec will be updated to this value on oxupdatepricetime date
     *
     * double = 0
     */
    public const UPDATEPRICEC = 'oxupdatepricec';

    /**
     * Date, when oxprice[a,b,c] should be updated to oxupdateprice[a,b,c] values
     *
     * timestamp = 0000-00-00 00:00:00
     */
    public const UPDATEPRICETIME = 'oxupdatepricetime';

    /**
     * Enable download of files for this product
     *
     * tinyint(1) = 0
     */
    public const ISDOWNLOADABLE = 'oxisdownloadable';

    /**
     * Show custom agreement check in checkout
     *
     * tinyint(1) = 1
     */
    public const SHOWCUSTOMAGREEMENT = 'oxshowcustomagreement';
}