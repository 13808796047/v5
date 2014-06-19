<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>绿黑色物流网站设计G</title>
	<meta content=" " name="keywords" />
	<meta content="" name="description" />

	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/cms/template/default/static/css/css1.css" />
</head>
<body >
	<!--顶部-->
	<div id="doc">
		<div id="hd">
			<div class="clearfix pagetitle">
				<h1 class="sitename">
					<a href="/" title="绿黑色物流网站设计G">
						<img  class="ifixpng" src="http://7737.open.www313.com/themed/9671_20131223094610_publish/img/logo.png"  alt="绿黑色物流网站设计G" />
					</a>
				</h1>
				<div class="language">
					<div class="language-inner"></div>
					<form class="search clearfix" action="/search">
						<input id="ipt-keywords" name="keyword" class="enter" type="text" value="请输入关键字..." />
						<button class="btn" type="submit"></button>
					</form>
				</div>
			</div>
			<div class="clearfix sitenav">
				<div class="clearfix menu-main">
					<ul id="menuSitenav" class="clearfix">
						<li class="first-item">
							<a href="http://127.0.0.1/v5/cms" class="home">
								<span>首页</span>
							</a>
						</li>
							<?php
		$type='top';
		$cid =0?0:Q('cid',null,'intval');

		$db = M('category');
		$result = array();
		switch($type){
			case 'self'://显示同级栏目,需要栏目cid
			if($cid){
				$pid = $db->where("cid=$cid")->getField('pid');
				$result=$db->where("pid=$pid")->all();
			}
			break;
			case 'son'://子栏目,需要栏目cid

			if($cid){
				$result=$db->where("pid=$cid")->all();
			}
			break;
			case 'top'://一级栏目
			$result = $db->where('pid=0')->all();
			break;
		}
		
		if($result):
		foreach($result as $field):
			$field['url'] = U('channel',array('cid'=>$field['cid']))
			?>
						<li >
							<a href="<?php echo $field['url'];?>" target="_self">
								<span><?php echo $field['cname'];?></span>
							</a>
						</li>
					<?php endforeach;endif;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
