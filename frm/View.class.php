<?php

/*
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-16 12:05:38
 * @Version 1.0
 */

/**
 * describe of View
 */
class View {
	public $a;
	//初始化模板引擎对象
	public function __construct() {
		//引入模板
		require_once FRM_PATH."/drivers/libs/Smarty.class.php";
		$smarty = new Smarty();
		$smarty->template_dir = APP_PATH."/view";
		$smarty->compile_dir = APP_PATH."/runtime/tmp";
		$smarty->cache_dir = APP_PATH."/runtime/cache";
		//将smarty对象赋值给属性
		$this->a = $smarty;
	}
}
