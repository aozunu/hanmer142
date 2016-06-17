<?php /* Smarty version Smarty-3.0.6, created on 2016-06-17 03:11:16
         compiled from "./view\user/add.html" */ ?>
<?php /*%%SmartyHeaderCode:464457634e34066220-72366025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c1d58afab438c98226d78a26c38cfbf3f0fb659' => 
    array (
      0 => './view\\user/add.html',
      1 => 1466125804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '464457634e34066220-72366025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--
--Copyright(c)2016 All rights reserved.
--@Licenced  http://www.w3.org
--@Author  liutian<1538731090@qq.com> liutian_jiayi
--@Create on 2016-6-17 8:38:48
--@Version 1.0
-->
<html>
	<head>
		<title>TODO supply a title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form method="post" action="index.php?controller=user&action=insert">
			<input type='hidden' name='uid' value='' />
			<p>账号：<input type="text" name="uname" value="" /></p>
			<p>昵称：<input type="text" name="nickname" value="" /></p>
			<p>密码：<input type="password" name="password" value="" /></p>
			 <input type='submit' value='添加' />
		</form>
	</body>
</html>
