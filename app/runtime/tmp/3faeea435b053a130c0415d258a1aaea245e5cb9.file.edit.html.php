<?php /* Smarty version Smarty-3.0.6, created on 2016-06-17 05:19:31
         compiled from "./app/view\user/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1209857636c43aa7501-26812762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3faeea435b053a130c0415d258a1aaea245e5cb9' => 
    array (
      0 => './app/view\\user/edit.html',
      1 => 1466049539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209857636c43aa7501-26812762',
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
--@Create on 2016-6-16 11:53:59
--@Version 1.0
-->
<html>
	<head>
		<title>编辑用户页面</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form method="post" action="index.php?controller=user&action=update">
			<input type='hidden' name='uid' value='<?php echo $_smarty_tpl->getVariable('userRec')->value["uid"];?>
' />
			<p>账号：<input type="text" name="uname" value="<?php echo $_smarty_tpl->getVariable('userRec')->value['uname'];?>
" /></p>
			<p>昵称：<input type="text" name="nickname" value="<?php echo $_smarty_tpl->getVariable('userRec')->value['nickname'];?>
" /></p>
			 <input type='submit' value='修改' />
		</form>
	</body>
</html>
