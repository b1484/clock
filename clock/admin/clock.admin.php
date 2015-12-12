<?php
/**
 * Редактирование статей
 * 
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://cms.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2014 OOO «Диафан» (http://diafan.ru)
 */
if (!defined('DIAFAN'))
{
    include dirname(dirname(dirname(__FILE__))).'/includes/404.php';
}

/**
 * Example_admin
 */
class Clock_admin extends Frame_admin
{
	/**
	 * @var string таблица в базе данных
	 */
	public $table = 'clock';

	/**
	 * @var array поля в базе данных для редактирования
	 */
	public $variables = array (
		'main' => array (
			'created' => array(
				'type' => 'datetime',
				'name' => 'Дата создания',
			),
			'color' => array(
				'type' => 'editor',
				'name' => 'color',
			),
			'text' => array(
				'type' => 'editor',
				'name' => 'Текст объявления',
			),
		),
	);

	/**
	 * @var array настройки модуля
	 */
	public $config = array (
		'act', // показать/скрыть
		
		
		
	);

	
	public $text_for_base_link = array(
		'variable' => 'text'
	);

	

	
	/**
	 * Выводит контент модуля
	 * 
	 * @return void
	 */
	public function show()
	{   
	// DB::query("UPDATE {".$this->diafan->table."} SET color=1 WHERE id='1'");
	     $userss = DB::query_result("SELECT * FROM {clock} WHERE text='часы'");


if(!($userss["text"])){
	       $usersisert= DB::query("INSERT INTO {".$this->diafan->table."} (text) VALUES ('часы')");
}
	 
		// $users = DB::query_fetch_all("SELECT id, fio FROM {users} WHERE trash='0' ORDER BY fio ASC");
		// $usersisert= DB::query("INSERT INTO {clock} (color) VALUES ('255,000,000')");

		echo '<h2>выбор цвета часов:</h2><div style="cursor: pointer;width:50px;height:50px ;background:#ff0000;"  id="red"></div>';
		echo '<div style=" cursor: pointer;width:50px;height:50px ;background:#00ff00;"  id="green"></div>';
		echo '<div style="cursor: pointer;width:50px;height:50px ;background:#0000ff;"  id="blue"></div>';
		


		$this->diafan->list_row();
	} 

	
	

	
	
}