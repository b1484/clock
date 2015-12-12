<?php
/**
 * Установка модуля
 *
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://cms.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2014 OOO «Диафан» (http://diafan.ru)
 */

if (! defined('DIAFAN'))
{
    include dirname(dirname(dirname(__FILE__))).'/includes/404.php';
}

class Clock_install extends Install
{
    /**
     * @var string название
     */
    public $title = "Часы";

    /**
     * @var array таблицы в базе данных
     */
    public $tables = array(
        array(
            "name" => "clock",
            "fields" => array(
                array(
                    "name" => "id",
                    "type" => "INT(11) UNSIGNED NOT NULL AUTO_INCREMENT",
                ),
                array(
                    "name" => "user_id",
                    "type" => "INT(11) UNSIGNED NOT NULL DEFAULT '0'",
                ),
                array(
                    "name" => "created",
                    "type" => "INT(10) UNSIGNED NOT NULL DEFAULT '0'",
                ),
                array(
                    "name" => "text",
                    "type" => "text NOT NULL DEFAULT ''",
                ),
                array(
                    "name" => "sort",
                    "type" => "INT(11) UNSIGNED NOT NULL DEFAULT '0'",
                ),
                array(
                    "name" => "act",
                    "type" => "ENUM('0', '1') NOT NULL DEFAULT '0'",
                ),
                array(
                    "name" => "trash",
                    "type" => "ENUM('0', '1') NOT NULL DEFAULT '0'",
                ),
                array(
                    "name" => "color",
                    "type" => "text NOT NULL DEFAULT '' ",
                ),
              
            ),
            "keys" => array(
                "PRIMARY KEY (id)",
            ),
        ),
    );

    /**
     * @var array записи в таблице {modules}
     */
    public $modules = array(
        array(
            "name" => "clock",
            "admin" => true,
            "site" => true,
            "site_page" => true,
        ),
    );

    /**
     * @var array меню административной части
     */
    public $admin = array(
        array(
            "name" => "Часы",
            "rewrite" => "clock",
            "group_id" => "1",
            "sort" => 5,
            "act" => true,
            "children" => array(
                array(
                    "name" => "Настройки",
                    "rewrite" => "clock/config",
                ),
            )
        ),
    );
}