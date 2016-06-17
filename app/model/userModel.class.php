<?php

/*
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-16 10:32:55
 * @Version 1.0
 */

//用户数据表模型 
class userModel extends Model {
	public $tbname = "think_admin_user";
	public $pk = "uid";
	//设置自动验证
	public $_verify = array(
		//密码长度  6 - 15
		array("password", "length", "6,15"),
	);
	//设置自动填充规则
	public $_auto = array(
		//给密码字段设置md5函数加密
		array("password", "md5", "", "function"),
		//填充createtime字段值
		array("createtime", "date", "Y-m-d H:i:s", "function"),
	);

}
