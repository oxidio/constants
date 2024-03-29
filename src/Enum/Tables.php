<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum;

/**
 * 
 */
interface Tables
{
    /**
     * Stores information about actions, promotions and banners [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Actions
     */
    public const ACTIONS = 'oxactions';

    /**
     * Stores user shipping addresses [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Address
     */
    public const ADDRESS = 'oxaddress';

    /**
     * Articles information [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Article
     */
    public const ARTICLES = 'oxarticles';

    /**
     * Article attributes [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Attribute
     */
    public const ATTRIBUTE = 'oxattribute';

    /**
     * Article categories [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Category
     */
    public const CATEGORIES = 'oxcategories';

    /**
     * Content pages (Snippets, Menu, Categories, Manual) [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Content
     */
    public const CONTENTS = 'oxcontents';

    /**
     * Countries list [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Country
     */
    public const COUNTRY = 'oxcountry';

    /**
     * Delivery shipping cost rules [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Delivery
     */
    public const DELIVERY = 'oxdelivery';

    /**
     * Delivery (shipping) methods [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\DeliverySet
     */
    public const DELIVERYSET = 'oxdeliveryset';

    /**
     * Article discounts [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Discount
     */
    public const DISCOUNT = 'oxdiscount';

    /**
     * Files available for users to download [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\File
     */
    public const FILES = 'oxfiles';

    /**
     * User groups [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Groups
     */
    public const GROUPS = 'oxgroups';

    /**
     * Links [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Links
     */
    public const LINKS = 'oxlinks';

    /**
     * Shop manufacturers [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Manufacturer
     */
    public const MANUFACTURERS = 'oxmanufacturers';

    /**
     * Stores objects media [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\MediaUrl
     */
    public const MEDIAURLS = 'oxmediaurls';

    /**
     * Shop news [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\News
     */
    public const NEWS = 'oxnews';

    /**
     * User subscriptions [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\NewsSubscribed
     */
    public const NEWSSUBSCRIBED = 'oxnewssubscribed';

    /**
     * Templates for sending newsletters [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Newsletter
     */
    public const NEWSLETTER = 'oxnewsletter';

    /**
     * Shows many-to-many relationship between articles and categories [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Object2Category
     */
    public const O2CATEGORY = 'oxobject2category';

    /**
     * Shows many-to-many relationship between users and groups [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Object2Group
     */
    public const O2GROUP = 'oxobject2group';

    /**
     * Shop orders information [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Order
     */
    public const ORDER = 'oxorder';

    /**
     * Ordered articles information [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\OrderArticle
     */
    public const ORDERARTICLES = 'oxorderarticles';

    /**
     * Files, given to users to download after order [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\OrderFile
     */
    public const ORDERFILES = 'oxorderfiles';

    /**
     * Payment methods [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Payment
     */
    public const PAYMENTS = 'oxpayments';

    /**
     * Price fall alarm requests [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\PriceAlarm
     */
    public const PRICEALARM = 'oxpricealarm';

    /**
     * Articles and Listmania ratings [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Rating
     */
    public const RATINGS = 'oxratings';

    /**
     * Listmania [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\RecommendationList
     */
    public const RECOMMLISTS = 'oxrecommlists';

    /**
     * User History [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Remark
     */
    public const REMARK = 'oxremark';

    /**
     * Articles and Listmania reviews [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Review
     */
    public const REVIEWS = 'oxreviews';

    /**
     * Selection lists [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\SelectList
     */
    public const SELECTLIST = 'oxselectlist';

    /**
     * Shop config [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Shop
     */
    public const SHOPS = 'oxshops';

    /**
     * US States list [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\State
     */
    public const STATES = 'oxstates';

    /**
     * Shop administrators and users [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\User
     */
    public const USER = 'oxuser';

    /**
     * Active User baskets [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\UserBasket
     */
    public const USERBASKETS = 'oxuserbaskets';

    /**
     * User basket items [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\UserBasketItem
     */
    public const USERBASKETITEMS = 'oxuserbasketitems';

    /**
     * User payments [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\UserPayment
     */
    public const USERPAYMENTS = 'oxuserpayments';

    /**
     * Distributors list [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Vendor
     */
    public const VENDOR = 'oxvendor';

    /**
     * Generated coupons [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Voucher
     */
    public const VOUCHERS = 'oxvouchers';

    /**
     * Coupon series [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\VoucherSerie
     */
    public const VOUCHERSERIES = 'oxvoucherseries';

    /**
     * Wrappings [InnoDB]
     *
     * @see \OxidEsales\Eshop\Application\Model\Wrapping
     */
    public const WRAPPING = 'oxwrapping';

    /**
     * Shows which users has accepted shop terms [InnoDB]
     */
    public const ACCEPTEDTERMS = 'oxacceptedterms';

    /**
     * Shows many-to-many relationship between article and its accessory articles [InnoDB]
     */
    public const ACCESSOIRE2ARTICLE = 'oxaccessoire2article';

    /**
     * Shows many-to-many relationship between actions and articles [InnoDB]
     */
    public const ACTIONS2ARTICLE = 'oxactions2article';

    /**
     * Logs admin actions [InnoDB]
     */
    public const ADMINLOG = 'oxadminlog';

    /**
     * Additional information for articles [InnoDB]
     */
    public const ARTEXTENDS = 'oxartextends';

    /**
     * Shows many-to-many relationship between categories and attributes [InnoDB]
     */
    public const CATEGORY2ATTRIBUTE = 'oxcategory2attribute';

    /**
     * Shop configuration values [InnoDB]
     */
    public const CONFIG = 'oxconfig';

    /**
     * Additional configuraion fields [InnoDB]
     */
    public const CONFIGDISPLAY = 'oxconfigdisplay';

    /**
     * Shop counters [InnoDB]
     */
    public const COUNTERS = 'oxcounters';

    /**
     * Shows many-to-many relationship between Shipping cost rules (oxdelivery) and delivery methods (oxdeliveryset) [InnoDB]
     */
    public const DEL2DELSET = 'oxdel2delset';

    /**
     * User sent invitations [InnoDB]
     */
    public const INVITATIONS = 'oxinvitations';

    /**
     *  [InnoDB]
     */
    public const MIGRATIONS_CE = 'oxmigrations_ce';

    /**
     * Shows many-to-many relationship between actions (oxactions) and objects (table set by oxclass) [InnoDB]
     */
    public const O2ACTION = 'oxobject2action';

    /**
     * Shows many-to-many relationship between cross-selling articles [InnoDB]
     */
    public const O2ARTICLE = 'oxobject2article';

    /**
     * Shows many-to-many relationship between articles and attributes [InnoDB]
     */
    public const O2ATTRIBUTE = 'oxobject2attribute';

    /**
     * Shows many-to-many relationship between delivery cost rules and objects (table determined by oxtype) [InnoDB]
     */
    public const O2DELIVERY = 'oxobject2delivery';

    /**
     * Shows many-to-many relationship between discounts and objects (table determined by oxtype) [InnoDB]
     */
    public const O2DISCOUNT = 'oxobject2discount';

    /**
     * Shows many-to-many relationship between articles and listmania lists [InnoDB]
     */
    public const O2LIST = 'oxobject2list';

    /**
     * Shows many-to-many relationship between payments and objects (table determined by oxtype) [InnoDB]
     */
    public const O2PAYMENT = 'oxobject2payment';

    /**
     * Shows many-to-many relationship between articles and selection lists [InnoDB]
     */
    public const O2SELECTLIST = 'oxobject2selectlist';

    /**
     * Seo entries [InnoDB]
     */
    public const O2SEODATA = 'oxobject2seodata';

    /**
     * Article scale prices [InnoDB]
     */
    public const PRICE2ARTICLE = 'oxprice2article';

    /**
     * Seo urls information [InnoDB]
     */
    public const SEO = 'oxseo';

    /**
     * Seo urls history. If url does not exists in oxseo, then checks here and redirects [InnoDB]
     */
    public const SEOHISTORY = 'oxseohistory';

    /**
     * Seo logging. Logs bad requests [InnoDB]
     */
    public const SEOLOGS = 'oxseologs';

    /**
     * Module template blocks [InnoDB]
     */
    public const TPLBLOCKS = 'oxtplblocks';
}