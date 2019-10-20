<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Shop orders information [InnoDB]
 */
interface ORDER
{
    /**
     * Order id
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
     * User id (oxuser)
     *
     * char(32)
     */
    public const USERID = 'oxuserid';

    /**
     * Order date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const ORDERDATE = 'oxorderdate';

    /**
     * Order number
     *
     * int(11) = 0
     */
    public const ORDERNR = 'oxordernr';

    /**
     * Billing info: Company name
     *
     * varchar(255)
     */
    public const BILLCOMPANY = 'oxbillcompany';

    /**
     * Billing info: Email
     *
     * varchar(255)
     */
    public const BILLEMAIL = 'oxbillemail';

    /**
     * Billing info: First name
     *
     * varchar(255)
     */
    public const BILLFNAME = 'oxbillfname';

    /**
     * Billing info: Last name
     *
     * varchar(255)
     */
    public const BILLLNAME = 'oxbilllname';

    /**
     * Billing info: Street name
     *
     * varchar(255)
     */
    public const BILLSTREET = 'oxbillstreet';

    /**
     * Billing info: House number
     *
     * varchar(16)
     */
    public const BILLSTREETNR = 'oxbillstreetnr';

    /**
     * Billing info: Additional info
     *
     * varchar(255)
     */
    public const BILLADDINFO = 'oxbilladdinfo';

    /**
     * Billing info: VAT ID No.
     *
     * varchar(255)
     */
    public const BILLUSTID = 'oxbillustid';

    /**
     * Billing info: City
     *
     * varchar(255)
     */
    public const BILLCITY = 'oxbillcity';

    /**
     * Billing info: Country id (oxcountry)
     *
     * varchar(32)
     */
    public const BILLCOUNTRYID = 'oxbillcountryid';

    /**
     * Billing info: US State id (oxstates)
     *
     * varchar(32)
     */
    public const BILLSTATEID = 'oxbillstateid';

    /**
     * Billing info: Zip code
     *
     * varchar(16)
     */
    public const BILLZIP = 'oxbillzip';

    /**
     * Billing info: Phone number
     *
     * varchar(128)
     */
    public const BILLFON = 'oxbillfon';

    /**
     * Billing info: Fax number
     *
     * varchar(128)
     */
    public const BILLFAX = 'oxbillfax';

    /**
     * Billing info: User title prefix (Mr/Mrs)
     *
     * varchar(128)
     */
    public const BILLSAL = 'oxbillsal';

    /**
     * Shipping info: Company name
     *
     * varchar(255)
     */
    public const DELCOMPANY = 'oxdelcompany';

    /**
     * Shipping info: First name
     *
     * varchar(255)
     */
    public const DELFNAME = 'oxdelfname';

    /**
     * Shipping info: Last name
     *
     * varchar(255)
     */
    public const DELLNAME = 'oxdellname';

    /**
     * Shipping info: Street name
     *
     * varchar(255)
     */
    public const DELSTREET = 'oxdelstreet';

    /**
     * Shipping info: House number
     *
     * varchar(16)
     */
    public const DELSTREETNR = 'oxdelstreetnr';

    /**
     * Shipping info: Additional info
     *
     * varchar(255)
     */
    public const DELADDINFO = 'oxdeladdinfo';

    /**
     * Shipping info: City
     *
     * varchar(255)
     */
    public const DELCITY = 'oxdelcity';

    /**
     * Shipping info: Country id (oxcountry)
     *
     * varchar(32)
     */
    public const DELCOUNTRYID = 'oxdelcountryid';

    /**
     * Shipping info: US State id (oxstates)
     *
     * varchar(32)
     */
    public const DELSTATEID = 'oxdelstateid';

    /**
     * Shipping info: Zip code
     *
     * varchar(16)
     */
    public const DELZIP = 'oxdelzip';

    /**
     * Shipping info: Phone number
     *
     * varchar(128)
     */
    public const DELFON = 'oxdelfon';

    /**
     * Shipping info: Fax number
     *
     * varchar(128)
     */
    public const DELFAX = 'oxdelfax';

    /**
     * Shipping info: User title prefix (Mr/Mrs)
     *
     * varchar(128)
     */
    public const DELSAL = 'oxdelsal';

    /**
     * User payment id (oxuserpayments)
     *
     * char(32)
     */
    public const PAYMENTID = 'oxpaymentid';

    /**
     * Payment id (oxpayments)
     *
     * char(32)
     */
    public const PAYMENTTYPE = 'oxpaymenttype';

    /**
     * Total net sum
     *
     * double = 0
     */
    public const TOTALNETSUM = 'oxtotalnetsum';

    /**
     * Total brut sum
     *
     * double = 0
     */
    public const TOTALBRUTSUM = 'oxtotalbrutsum';

    /**
     * Total order sum
     *
     * double = 0
     */
    public const TOTALORDERSUM = 'oxtotalordersum';

    /**
     * First VAT
     *
     * double = 0
     */
    public const ARTVAT1 = 'oxartvat1';

    /**
     * First calculated VAT price
     *
     * double = 0
     */
    public const ARTVATPRICE1 = 'oxartvatprice1';

    /**
     * Second VAT
     *
     * double = 0
     */
    public const ARTVAT2 = 'oxartvat2';

    /**
     * Second calculated VAT price
     *
     * double = 0
     */
    public const ARTVATPRICE2 = 'oxartvatprice2';

    /**
     * Delivery price
     *
     * double = 0
     */
    public const DELCOST = 'oxdelcost';

    /**
     * Delivery VAT
     *
     * double = 0
     */
    public const DELVAT = 'oxdelvat';

    /**
     * Payment cost
     *
     * double = 0
     */
    public const PAYCOST = 'oxpaycost';

    /**
     * Payment VAT
     *
     * double = 0
     */
    public const PAYVAT = 'oxpayvat';

    /**
     * Wrapping cost
     *
     * double = 0
     */
    public const WRAPCOST = 'oxwrapcost';

    /**
     * Wrapping VAT
     *
     * double = 0
     */
    public const WRAPVAT = 'oxwrapvat';

    /**
     * Giftcard cost
     *
     * double = 0
     */
    public const GIFTCARDCOST = 'oxgiftcardcost';

    /**
     * Giftcard VAT
     *
     * double = 0
     */
    public const GIFTCARDVAT = 'oxgiftcardvat';

    /**
     * Gift card id (oxwrapping)
     *
     * varchar(32)
     */
    public const CARDID = 'oxcardid';

    /**
     * Gift card text
     *
     * text
     */
    public const CARDTEXT = 'oxcardtext';

    /**
     * Additional discount for order (abs)
     *
     * double = 0
     */
    public const DISCOUNT = 'oxdiscount';

    /**
     * Is exported
     *
     * tinyint(4) = 0
     */
    public const EXPORT = 'oxexport';

    /**
     * Invoice No.
     *
     * varchar(128)
     */
    public const BILLNR = 'oxbillnr';

    /**
     * Invoice sent date
     *
     * date = 0000-00-00
     */
    public const BILLDATE = 'oxbilldate';

    /**
     * Tracking code
     *
     * varchar(128)
     */
    public const TRACKCODE = 'oxtrackcode';

    /**
     * Order shipping date
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const SENDDATE = 'oxsenddate';

    /**
     * User remarks
     *
     * text
     */
    public const REMARK = 'oxremark';

    /**
     * Coupon (voucher) discount price
     *
     * double = 0
     */
    public const VOUCHERDISCOUNT = 'oxvoucherdiscount';

    /**
     * Currency
     *
     * varchar(32)
     */
    public const CURRENCY = 'oxcurrency';

    /**
     * Currency rate
     *
     * double = 0
     */
    public const CURRATE = 'oxcurrate';

    /**
     * Folder: ORDERFOLDER_FINISHED, ORDERFOLDER_NEW, ORDERFOLDER_PROBLEMS
     *
     * varchar(32)
     */
    public const FOLDER = 'oxfolder';

    /**
     * Paypal: Transaction id
     *
     * varchar(64)
     */
    public const TRANSID = 'oxtransid';

    /**
     * 
     *
     * varchar(64)
     */
    public const PAYID = 'oxpayid';

    /**
     * 
     *
     * varchar(64)
     */
    public const XID = 'oxxid';

    /**
     * Time, when order was paid
     *
     * datetime = 0000-00-00 00:00:00
     */
    public const PAID = 'oxpaid';

    /**
     * Order cancelled
     *
     * tinyint(1) = 0
     */
    public const STORNO = 'oxstorno';

    /**
     * User ip address
     *
     * varchar(39)
     */
    public const IP = 'oxip';

    /**
     * Order status: NOT_FINISHED, OK, ERROR
     *
     * varchar(30)
     */
    public const TRANSSTATUS = 'oxtransstatus';

    /**
     * Language id
     *
     * int(2) = 0
     */
    public const LANG = 'oxlang';

    /**
     * Invoice number
     *
     * int(11) = 0
     */
    public const INVOICENR = 'oxinvoicenr';

    /**
     * Delivery id (oxdeliveryset)
     *
     * char(32)
     */
    public const DELTYPE = 'oxdeltype';

    /**
     * Timestamp
     *
     * timestamp = CURRENT_TIMESTAMP
     */
    public const TIMESTAMP = 'oxtimestamp';

    /**
     * Order created in netto mode
     *
     * tinyint(1) = 0
     */
    public const ISNETTOMODE = 'oxisnettomode';
}