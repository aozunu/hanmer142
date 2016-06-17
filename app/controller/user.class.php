<?php

/* 
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-16 10:09:30
 * @Version 1.0
 */
/**
 * 用户模块的功能实现：
 * 1、显示用户列表
 * 2、添加用户的表单
 * 3、插入用户
 * 4、编辑用户的表单
 * 5、修改用户
 * 6、删除用户
 * 日志模块 删除模块
 */
class user extends Controller{
	 
	public function index() {
//		echo "用户 列表";exit;
		//查询用户信息
		$userModel = D("userModel");
//		var_dump($userModel);exit;
		//查找用户记录
		$rows = $userModel->select();
//		var_dump($rows);
//		$this->view->assign("rows", $rows);
//		$this->view->display("user/index.html");
//		$this->assign("rows", $rows);
//		$this->assign("aa", "aaaaaaaaaa");
		$this->aa = "bbb";
		$this->rows = $rows;
		
		$this->display();
	}
	
	public function add() {
//		echo "用户 添加";
		//显示添加表单
		$this->display();
	}
	
	public function insert() {
//		echo "用户 插入";
		//如果默认使用 POST表单数据 则需要create创建数据对象
		$userModel = D("userModel");
		if ($userModel->create() == false) {
			exit($userModel->getError());
		}
		//将创建好的 存在模型data属性中的数据 入库
		$insertID = $userModel->add();
		//输出提示 并跳转
		$this->success("插入成功，编号：{$insertID}","index.php", 3);
	}
	
	//编辑页面
	public function edit() {
		//查找该条记录
		$userModel = D("userModel");
		//执行查找 返回二维数组
		$userRec = $userModel->where(array("uid" => $_GET["uid"]))->select();
		//发送数据
		$this->userRec = $userRec[0];
		//模板中显示
		$this->display();
	}
	
	//修改记录
	public function update() {
		$userModel = D("userModel");
		//对入库的数据 进行创建
		if ($userModel->create() == false) {
			exit($userModel->getError());
		}
		$affected_rows = $userModel->where(array("uid" => $_POST['uid']))->save();
		echo "成功修改了".$affected_rows."条记录，<a href='index.php'>查看</a>";
	}
	
	//删除用户
	public function delete() {
		//实例化表模型
		$userModel = D("userModel");
		$affected_row = $userModel->delete($_GET['uid']);
		//输出提示
		if ($affected_row > 0) {
			$this->success("成功删除了{$affected_row}条记录");
		}
	}
}