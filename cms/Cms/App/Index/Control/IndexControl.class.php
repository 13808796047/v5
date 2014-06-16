<?php
Class IndexControl extends Control{
	//构造函数
	Public function __init(){
		define('__TEMPLATE__',__ROOT__.'/template/default');
	}
	//显示网站首页
	Public function index(){
		$db = M('article');
		$data = $db->all();
		$this->data = $data;
		$this->display('template/default/index.html');
	}
	//显示栏目列表
	Public function channel(){
		$cid = Q('cid',null,'intval');

		if($cid){
			$db = M('category');

			$this->field=$db->find($cid);
			$this->display('template/default/list.html');
		}
	}
}