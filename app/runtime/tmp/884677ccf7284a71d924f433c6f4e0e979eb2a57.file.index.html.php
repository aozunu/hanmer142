<?php /* Smarty version Smarty-3.0.6, created on 2016-06-17 02:39:18
         compiled from "./view\user/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1656576346b60c9879-67477764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '884677ccf7284a71d924f433c6f4e0e979eb2a57' => 
    array (
      0 => './view\\user/index.html',
      1 => 1466123881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656576346b60c9879-67477764',
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
--@Create on 2016-6-16 10:59:03
--@Version 1.0
-->
<html>
	<head>
		<title>TODO supply a title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h4>所有用户列表<?php echo $_smarty_tpl->getVariable('aa')->value;?>
</h4>
		<a href="index.php?controller=user&action=add">添加用户</a>
		<table border="1">
			<tr>
				<th>#</th><th>UNAME</th><th>NICKNAME</th><th>CREATETIME</th><th>OPTION</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rows')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tmp']->key => $_smarty_tpl->tpl_vars['tmp']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tmp']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['tmp']->value['uid'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tmp']->value['uname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tmp']->value['nickname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tmp']->value['createtime'];?>
</td>
				<td><a href='index.php?controller=user&action=edit&uid=<?php echo $_smarty_tpl->tpl_vars['tmp']->value["uid"];?>
'>编辑</a> <a href='index.php?controller=user&action=delete&uid=<?php echo $_smarty_tpl->tpl_vars['tmp']->value["uid"];?>
'>删除</a></td>
			</tr>
			<?php }} ?>
		</table>
	</body>
</html>
