<?php
/**
 * Шаблон модуля
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

foreach($result["rows"] as $row)
{
	$varcol=($row['color']) ? $row['color'] : "90,150,180";
echo '<canvas height="500px" id="jst_clock_id1" width="300px">НЕ ПОДДЕРЖИВАЕТ КАНВАС</canvas>
<script type="text/javascript" >var bkcolor=Array('.$varcol.');</script>';


	
}
