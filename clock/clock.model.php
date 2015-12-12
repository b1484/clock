<?php
/**
 * Модель
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

/**
 * Example_model
 */
class Clock_model extends Model
{
	/**
	 * @return void
	 */
	public function show()
	{
		
		
			$this->result = array();
	
			////navigation//
			$this->diafan->_paginator->nen = DB::query_result("SELECT COUNT(id) FROM {clock} WHERE act='1' AND trash='0'");
			$this->result["paginator"] = $this->diafan->_paginator->get();
			////navigation///
	
			$rows = DB::query_range_fetch_all("SELECT id, created, text FROM {clock} WHERE act='1' AND trash='0' ORDER BY created DESC, id DESC",
				$this->diafan->_paginator->polog, $this->diafan->_paginator->nastr);
	
			
		$row['color']= DB::query_result("SELECT color FROM {clock} WHERE text='часы'");
				$this->result['rows'][] = $row;
	
			//сохранение кэша
			$this->diafan->_cache->save($this->result, $cache_meta, 'clock');
	
	
		$this->result["paginator"] = $this->diafan->_tpl->get('get', 'paginator', $this->result["paginator"]);

		$this->result['view'] = 'show';
	}
}