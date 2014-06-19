<?php
//测试控制器类
class IndexControl extends Control{
	Public function __init(){
		if(is_file('lock.php')){
			$this->error('请删除lock.php文件后安装',dirname(__ROOT__));
		}
	}
	//欢迎界面
    Public function index(){
       $this->display();
    }
    /**
     * CMS系统的目录、函数、扩展库检测
     * @return [type] [description]
     */
    Public function check(){
    	//需要检测的目录
    	$dir = array(
    		'../backup',
    		'../Data',
    		'../Data/cache',
    		'../Data/config',
    		'../upload'
    		);
    	$functions = array(
    		'mb_substr',
    		mysql_connect,
    		'imagecreatetruecolor'
    		);
    	$this->dir=$dir;
    	$this->functions=$functions;
    	$this->display();
    }
    //设置数据库连接
    Public function set_db(){
    	if(IS_POST){
    		if(!mysql_connect($_POST['DB_HOST'],$_POST['DB_NAME'],$_POST['DB_PASSWORD'])){
    			$this->error('数据库账号或密码错误');
    		}
    		C($_POST);
    		
    		$db = M();
    		$db->exe('CREATE DATABASE IF NOT EXISTS'.$_POST['DB_NAME']);
    	}else{
    		$this->display();	
    	}
    	
    }
}
?>