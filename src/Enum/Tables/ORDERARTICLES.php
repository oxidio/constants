<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum\Tables;

/**
 * Ordered articles information [InnoDB]
 */
interface ORDERARTICLES
{
    /**
     * Order article id
     *
     * char(32)
     */
    public const ID = 'oxid';

    /**
     * Order id (oxorder)
     *
     * char(32)
     */
    public const ORDERID = 'oxorderid';

    /**
     * Amount
     *
     * double = 0
     */
    public const AMOUNT = 'oxamount';

    /**
     * Article id (oxarticles)
     *
     * char(32)
     */
    public const ARTID = 'oxartid';

    /**
     * Article number
     *
     * varchar(255)
     */
    public const ARTNUM = 'oxartnum';

    /**
     * Title
     *
     * varchar(255)
     */
    public const TITLE = 'oxtitle';

    /**
     * Short description
     *
     * varchar(255)
     */
    public const SHORTDESC = 'oxshortdesc';

    /**
     * Selected variant
     *
     * varchar(255)
     */
    public const SELVARIANT = 'oxselvariant';

    /**
     * Full netto price (oxnprice * oxamount)
     *
     * double = 0
     */
    public const NETPRICE = 'oxnetprice';

    /**
     * Full brutto price (oxbprice * oxamount)
     *
     * double = 0
     */
    public const BRUTPRICE = 'oxbrutprice';

    /**
     * Calculated VAT price
     *
     * double = 0
     */
    public const VATPRICE = 'oxvatprice';

    /**
     * VAT
     *
     * double = 0
     */
    public const VAT = 'oxvat';

    /**
     * Serialized persistent parameters
     *
     * text
     */
    public const PERSPARAM = 'oxpersparam';

    /**
     * Base price
     *
     * double = 0
     */
    public const PRICE = 'oxprice';

    /**
     * Brutto price for one item
     *
     * double = 0
     */
    public const BPRICE = 'oxbprice';

    /**
     * Netto price for one item
     *
     * double = 0
     */
    public const NPRICE = 'oxnprice';

    /**
     * Wrapping id (oxwrapping)
     *
     * varchar(32)
     */
    public const WRAPID = 'oxwrapid';

    /**
     * External URL to other information about the article
     *
     * varchar(255)
     */
    public const EXTURL = 'oxexturl';

    /**
     * Text for external URL
     *
     * varchar(255)
     */
    public const URLDESC = 'oxurldesc';

    /**
     * External URL image
     *
     * varchar(128)
     */
    public const URLIMG = 'oxurlimg';

    /**
     * Thumbnail filename
     *
     * varchar(128)
     */
    public const THUMB = 'oxthumb';

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
     * Weight (kg)
     *
     * double = 0
     */
    public const WEIGHT = 'oxweight';

    /**
     * Articles quantity in stock
     *
     * double = -1
     */
    public const STOCK = 'oxstock';

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
     * Search terms
     *
     * varchar(255)
     */
    public const SEARCHKEYS = 'oxsearchkeys';

    /**
     * Alternative template filename (use default, if empty)
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
     * Is article shown in search
     *
     * tinyint(1) = 1
     */
    public const ISSEARCH = 'oxissearch';

    /**
     * Folder: ORDERFOLDER_FINISHED, ORDERFOLDER_NEW, ORDERFOLDER_PROBLEMS
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
     * Order cancelled
     *
     * tinyint(1) = 0
     */
    public const STORNO = 'oxstorno';

    /**
     * Shop id (oxshops), in which order was done
     *
     * int(11) = 1
     */
    public const ORDERSHOPID = 'oxordershopid';

    /**
     * Bundled article
     *
     * tinyint(1) = 0
     */
    public const ISBUNDLE = 'oxisbundle';
}