<?php
/**
 * Обработка POST-запросов
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

class Clock_admin_action extends Action_admin
{
	/**
	 * Вызывает обработку Ajax-запросов
	 * 
	 * @return void
	 */
	public function init()
	{
		


		if (! empty($_POST["action"]))
		{
			switch($_POST["action"])
			{
				case 'user':
					$this->user();
					break;
					case 'red':
					$this->red();
					break;
					case 'green':
					$this->green();
					break;
					case 'blue':
					$this->blue();
					break;
			}
		}
	}

	/**
	 * Вызывает обработку Ajax-запросов
	 * 
	 * @return void
	 */
	public function user()
	{
		if (! empty($_POST['user_id']))
		{
			$this->result["name"] = DB::query_result("SELECT fio FROM {users} WHERE id='%d'", $_POST['user_id']);
			$usersisert= DB::query("INSERT INTO {clock} (color) VALUES ('255,000,000')");
		}
		else
		{
			$this->result["name"] = 'ошибка';
		}
	}
	public function red()
	{
		
			
			DB::query("UPDATE {".$this->diafan->table."} SET color='255,000,000' WHERE text='часы'");

	}public function green()
	{
		
			DB::query("UPDATE {".$this->diafan->table."} SET color='000,255,000' WHERE text='часы'");
			
		
	}public function blue()
	{
		
			DB::query("UPDATE {".$this->diafan->table."} SET color='000,000,255' WHERE text='часы'");
			
		
	}
}