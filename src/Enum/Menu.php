<?php
/**
 * Copyright (C) oxidio. See LICENSE file for license details.
 */

namespace Oxidio\Enum;

interface Menu
{
    /**
     * ESHOP ADMIN
     */
    public const ADMIN = 'NAVIGATION_ESHOPADMIN';

    /**
     * Master Settings
     */
    public const ADMIN_MAIN = self::ADMIN . '/mxmainmenu';

    /**
     * Shop Settings
     */
    public const ADMIN_SETTINGS = self::ADMIN . '/mxshopsett';

    /**
     * Extensions
     */
    public const ADMIN_EXTENSIONS = self::ADMIN . '/mxextensions';

    /**
     * Administer Products
     */
    public const ADMIN_PRODUCTS = self::ADMIN . '/mxmanageprod';

    /**
     * Administer Users
     */
    public const ADMIN_USERS = self::ADMIN . '/mxuadmin';

    /**
     * Administer Orders
     */
    public const ADMIN_ORDERS = self::ADMIN . '/mxorders';

    /**
     * Customer Info
     */
    public const ADMIN_INFO = self::ADMIN . '/mxcustnews';

    /**
     * Service
     */
    public const ADMIN_SERVICE = self::ADMIN . '/mxservice';

    /**
     * Core Settings
     */
    public const ADMIN_MAIN_CORE = self::ADMIN_MAIN . '/mxcoresett';

    /**
     * Countries
     */
    public const ADMIN_MAIN_COUNTRIES = self::ADMIN_MAIN . '/mxcountries';

    /**
     * Distributors
     */
    public const ADMIN_MAIN_VENDORS = self::ADMIN_MAIN . '/mxvendor';

    /**
     * Brands/Manufacturers
     */
    public const ADMIN_MAIN_MANUFACTURERS = self::ADMIN_MAIN . '/mxmanufacturer';

    /**
     * Languages
     */
    public const ADMIN_MAIN_LANGUAGES = self::ADMIN_MAIN . '/mxlanguages';

    /**
     * Payment Methods
     */
    public const ADMIN_SETTINGS_PAYMENTS = self::ADMIN_SETTINGS . '/mxpaymeth';

    /**
     * Discounts
     */
    public const ADMIN_SETTINGS_DISCOUNTS = self::ADMIN_SETTINGS . '/mxdiscount';

    /**
     * Shipping Methods
     */
    public const ADMIN_SETTINGS_SHIPPING = self::ADMIN_SETTINGS . '/mxshippingset';

    /**
     * Shipping Cost Rules
     */
    public const ADMIN_SETTINGS_COST_RULES = self::ADMIN_SETTINGS . '/mxshipping';

    /**
     * Coupon Series
     */
    public const ADMIN_SETTINGS_VOUCHERS = self::ADMIN_SETTINGS . '/mxvouchers';

    /**
     * Gift Wrapping
     */
    public const ADMIN_SETTINGS_WRAPPINGS = self::ADMIN_SETTINGS . '/mxwrapping';

    /**
     * Themes
     */
    public const ADMIN_EXTENSIONS_THEMES = self::ADMIN_EXTENSIONS . '/mxtheme';

    /**
     * Modules
     */
    public const ADMIN_EXTENSIONS_MODULES = self::ADMIN_EXTENSIONS . '/mxmodule';

    /**
     * Products
     */
    public const ADMIN_PRODUCTS_ARTICLES = self::ADMIN_PRODUCTS . '/mxarticles';

    /**
     * Attributes
     */
    public const ADMIN_PRODUCTS_ATTRIBUTES = self::ADMIN_PRODUCTS . '/mxattributes';

    /**
     * Categories
     */
    public const ADMIN_PRODUCTS_CATEGORIES = self::ADMIN_PRODUCTS . '/mxcategories';

    /**
     * Selection Lists
     */
    public const ADMIN_PRODUCTS_LISTS = self::ADMIN_PRODUCTS . '/mxsellist';

    /**
     * List All Reviews
     */
    public const ADMIN_PRODUCTS_REVIEWS = self::ADMIN_PRODUCTS . '/mxremlist';
    /**
     * Users
     */
    public const ADMIN_USERS_USERS = self::ADMIN_USERS . '/mxusers';

    /**
     * User Groups
     */
    public const ADMIN_USERS_GROUPS = self::ADMIN_USERS . '/mxugroups';

    /**
     * List All Users
     */
    public const ADMIN_USERS_LIST = self::ADMIN_USERS . '/mxlist';

    /**
     * Orders
     */
    public const ADMIN_ORDERS_ORDERS = self::ADMIN_ORDERS . '/mxdisplayorders';

    /**
     * News
     */
    public const ADMIN_INFO_NEWS = self::ADMIN_INFO . '/mxnews';

    /**
     * Newsletter
     */
    public const ADMIN_INFO_NEWSLETTER = self::ADMIN_INFO . '/mxnewsletter';

    /**
     * Links
     */
    public const ADMIN_INFO_LINKS = self::ADMIN_INFO . '/mxurls';

    /**
     * CMS Pages
     */
    public const ADMIN_INFO_CMS = self::ADMIN_INFO . '/mxcontent';

    /**
     * Promotions
     */
    public const ADMIN_INFO_ACTIONS = self::ADMIN_INFO . '/mxactions';

    /**
     * Price Alert
     */
    public const ADMIN_INFO_PRICE_ALERTS = self::ADMIN_INFO . '/mxpricealarm';

    /**
     * System Info
     */
    public const ADMIN_SERVICE_INFO = self::ADMIN_SERVICE . '/mxsysinfo';

    /**
     * System health
     */
    public const ADMIN_SERVICE_HEALTH = self::ADMIN_SERVICE . '/mxsysreq';

    /**
     * Diagnostics tool
     */
    public const ADMIN_SERVICE_DIAGNOSTICS = self::ADMIN_SERVICE . '/oxdiag_menu';

    /**
     * Tools
     */
    public const ADMIN_SERVICE_TOOLS = self::ADMIN_SERVICE . '/mxtools';

    /**
     * Product Export
     */
    public const ADMIN_SERVICE_EXPORT = self::ADMIN_SERVICE . '/mxgenexp';

    /**
     * Generic Import
     */
    public const ADMIN_SERVICE_IMPORT = self::ADMIN_SERVICE . '/mxgenimp';
}
