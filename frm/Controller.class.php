<?php

/* 
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-16 11:25:32
 * @Version 1.0
 */
class Controller {
	public $view;
	public $data = array();
	//构造函数 初始化smarty对象
	public function __construct() {
		$view = new View();
		$this->view = $view->a;
	}
	
	public function __set($name, $value) {
		$this->data[$name] = $value;
	}
	
	public function assign($name, $value) {
		$this->view->assign($name, $value);
	}
	
	public function display($tpl = NULL) {
		global $controller, $action;
		//从data取数据 发送出去
		foreach ($this->data as $name=>$value) {
			$this->assign($name, $value);
		}
		if (empty($tpl)) {
			$tpl = $controller."/".$action;
		}
		$this->view->display($tpl.$GLOBALS['TPL_SUFFIX']);
	}
	
	//自动跳转的方法
	public function success($msg, $url = NULL, $delay = 3) {
		//默认跳转到上一页
		empty($url) && $url = $_SERVER['HTTP_REFERER'];
		//输入提示页面
		echo "<html><head><meta http-equiv='refresh' content='{$delay},url={$url}' /><meta charset='utf-8' /></head>";
		echo "<body>{$msg}，{$delay}秒后跳转~ <a href='{$url}'>立即跳转</a></body></html>";
	}
}
