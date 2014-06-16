<?php
Class ConfigControl extends AuthControl{
	//模型对象
	Private $db;
	//构造函数
	Public function __init(){
		$this->db = K('Config');

	}
	//设置配置项
	Public function set_config(){
		if(IS_POST){
			if($this->db->update_config()){
				go('set_config');
			}
		}else{

		}
		$this->config = $this->db->get_all();
		$this->display();
	}
}