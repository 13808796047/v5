<?php
//测试控制器类
class IndexControl extends AuthControl{
    function index(){
       $this->display();
    }
    Public function welcome(){
    	echo'欢迎使用V5CMS';
    }
}
?>