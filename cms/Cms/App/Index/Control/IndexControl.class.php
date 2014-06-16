<?php
Class IndexControl extends Control{
	//构造函数
	Public function __init(){
		define('__TEMPLATE__','template/default');
	}
	Public function index(){
		$db = M('article');
		$data = $db->all();
		$this->data = $data;
		$this->display('template/default/index.html');
	}
}