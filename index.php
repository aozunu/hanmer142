<?php

header("Content-type:text/html;charset=utf-8");
/*
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-16 9:57:34
 * @Version 1.0
 */
define("APP_PATH", "./app");
define("FRM_PATH", "./frm");
/**
 * 在初始化 执行代码时  引入资源
 */
foreach (array_merge(include FRM_PATH."/conf/conversion.php", include APP_PATH."/conf/common.php") as $item => $val) {
	$GLOBALS[$item] = $val;
}

//使用自动加载类函数
function __autoload($classname) {
	//按路径搜索
	$search_path = array(APP_PATH."/controller", APP_PATH."/model");
	foreach ($search_path as $path) {
		//如果该路径下 存在搜索文件 则引入该文件
		$full_path = $path."/{$classname}.class.php";
		if (file_exists($full_path)) {
			require_once $full_path;
			return;
		}
	}
	//未查找到文件 输出错误提示
	exit("类{$classname}对应文件{$classname}.class.php未找到!");
}

require_once FRM_PATH."/Model.class.php";
require_once FRM_PATH."/View.class.php";
require_once FRM_PATH."/Controller.class.php";

//产生一个模型对象
function D($model) {
	require_once APP_PATH."/model/{$model}.class.php";
	return new $model();
}

//使用流程 在不同的入口完成操作
$controller = isset($_GET['controller']) ? $_GET['controller'] : "user";
$action = isset($_GET['action']) ? $_GET['action'] : "index";

//开始流程控制
//if ($controller == "user") {
//	require_once "controller/user.php";
//} else if ($controller == "post") {
//	require_once "controller/post.php";
//} else if ($controller == "cat") {
//	require_once "controller/cat.php";
//}
//require_once "controller/{$controller}.php";

$c = new $controller();

$c->$action();