<?php

/**
 * PrestaShop Module - pitticacomputergross
 *
 * Copyright 2022 Pittica S.r.l.
 *
 * @category  Module
 * @package   Pittica/PrestaShop/Module/Computergross
 * @author    Lucio Benini <info@pittica.com>
 * @copyright 2022 Pittica S.r.l.
 * @license   http://opensource.org/licenses/LGPL-3.0  The GNU Lesser General Public License, version 3.0 ( LGPL-3.0 )
 * @link      https://github.com/pittica/prestashop-computergross
 */

$sql = array();
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . ComputergrossManufacturer::TABLE_NAME . '`;';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . ComputergrossCategory::TABLE_NAME . '`;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}