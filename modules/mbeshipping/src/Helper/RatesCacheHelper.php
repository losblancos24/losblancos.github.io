<?php
/**
 * 2017-2022 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    MBE Worldwide
 * @copyright 2017-2023 MBE Worldwide
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of MBE Worldwide
 */

namespace PrestaShop\Module\Mbeshipping\Helper;

if (!defined('_PS_VERSION_')) {
    exit;
}

class RatesCacheHelper
{
    protected $_table_name  = 'mbe_shipping_rates_cache';

    public function installRatesCacheTable(): bool
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . bqSQL($this->_table_name) . '`(
                `id_mbe_shipping_rates_cache` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                `id_cache` VARCHAR(32) NOT NULL,
                `id_cart` INT(10) UNSIGNED NOT NULL,
                `response` MEDIUMTEXT NOT NULL,
                `date_add` datetime NOT NULL,
                `date_upd` datetime NULL,
                INDEX MBE_SHIPPING_RATES_CACHE_IDX (`id_cache`, `id_cart`)
                )';
        return \Db::getInstance()->execute($sql);
    }

    public function uninstallRatesCacheTable(): bool
    {
        $sql = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . bqSQL($this->_table_name) . '`';
        return \Db::getInstance()->execute($sql);
    }
}
