<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>初识集装箱干燥剂 -  绿黑色物流网站设计G</title>
	<meta content=",网站新闻,网站新闻 " name="keywords" />
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
					<div class="language-inner">
						<span>中文</span>
						|
						<a href="/?language=eng">English</a>
					</div>
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
							<a href="/" class="home">
								<span>首页</span>
							</a>
						</li>
						<li >
							<a href="/page/gongsijieshao" target="_self">
								<span>公司介绍</span>
							</a>
						</li>
						<li >
							<a href="/products" target="_self">
								<span>产品管理</span>
							</a>
						</li>
						<li >
							<a href="/articles" target="_self">
								<span>网站新闻</span>
							</a>
						</li>
						<li >
							<a href="/jobs" target="_self">
								<span>人才招聘</span>
							</a>
						</li>
						<li >
							<a href="/books" target="_self">
								<span>留言系统</span>
							</a>
						</li>
						<li >
							<a href="/links" target="_self">
								<span>友情链接</span>
							</a>
						</li>
						<li >
							<a href="/downs" target="_self">
								<span>下载专区</span>
							</a>
						</li>
						<li  class="last-item">
							<a href="/page/lianxiwomen" target="_self">
								<span>联系我们</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!--banner-->
	<div id="banner-block">
		<div class="banner-block-width">
			<div id="sys-banner">
				<div id="banner-main" class="banner banner-main">
					<div class="banner-inner">
						<a href="/articles/meitibaodao/73640.html" target="_self">
							<img src="http://demo.open.www313.com/documents/show/6039" width="100%" alt="" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--中间区块-->
	<div id="content-block">
		<div class="content-block-width">
			<div id="bd">
				<div id="innerpg" class="bd-inner">
					<!--检查这里是否为一样-->
					<div class="clearfix layout-innerpg ">
						<style>
<!--
	.pages2 {height:30px;list-style-type:none;margin-left:20px;}
	.pages2 li {width:30px;text-align:center;float:left;}
	.pages2 li.bgcolor {background:#CCC;color:white;}
-->
</style>
						<div class="col-main">
							<div class="main-wrap">

								<div id='article-view' class="block first-block block-article-view">
									<div class="block-head">
										<div class="head-inner">
											<h2 class="title">媒体报道</h2>
											<div class="links">
												<a href="/articles">返回列表</a>
											</div>
										</div>
									</div>
									<div class="block-content clearfix">
										<div class="article-head">
											<h1 class="title"><?php echo $hdcms['title'];?></h1>
											<div class="meta">
												<span class="item">分类：<?php echo $hdcms['cname'];?></span>
												<span class="item">
													作者：
													<span class="yellow"><?php echo $hdcms['author'];?></span>
												</span>
												<span class="item">来源：<?php echo $hdcms['source'];?></span>
												<span class="item">
													发布：
													<span class="grey"><?php echo date('Y-m-d',$hdcms['addtime']);?></span>
												</span>
												<span class="item">
													点击次数：
													<span class="grey">
														<script type="text/javascript" src='http://127.0.0.1/v5/cms/index.php/Index/Index&m=update_click&id=<?php echo $hdcms['id'];?>'></script>
													</span>
												</span>
											</div>
										</div>
										<div class="article-content clearfix" style="padding-top:20px;"><?php echo $hdcms['content'];?></div>
										<div class="pages2">
													<?php
		$db = M('article');
		$id = Q('id',null,'intval');
		$result = $db->where("id<$id")->order('id DESC')->find();
		if($result){
			echo '<a href="#">'.$result['title'].'</a>';
		}else{
			echo '没有了...';
		}
		
		$result = $db->where("id>$id")->order('id ASC')->find();
		if($result){
			echo '<a href="#">'.$result['title'].'</a>';
		}else{
			echo '没有了...';
		}
		
		?>
										</div>
									</div>
									<div class="block-foot">
										<div>
											<div>-</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sub">
							<div class="block first-block block-articles  list-240" id="block-articles-109062" rel="109062">
								<div class="block-head">
									<div class="head-inner">
										<h2 class="title">文章分类</h2>
										<div class="links">
											<a class="more" href="/articles">更多</a>
										</div>
									</div>
								</div>
								<div class="block-content clearfix">
									<div class="item-list">
										<ul class="clearfix">
												<?php
		$type='son';
		$cid =39?39:Q('cid',null,'intval');

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
											<li>
												<a title="<?php echo $field['cname'];?>" href="<?php echo $field['url'];?>"><?php echo $field['cname'];?></a>
											</li>
										<?php endforeach;endif;?>	
											
										</ul>
									</div>
								</div>
								<div class="block-foot">
									<div>
										<div>-</div>
									</div>
								</div>
							</div>
							<div class="block last-block block-articles  list-240" id="block-articles-109061" rel="109061">
								<div class="block-head">
									<div class="head-inner">
										<h2 class="title">最新文章</h2>
										<div class="links">
											<a class="more" href="/articles">更多</a>
										</div>
									</div>
								</div>
								<div class="block-content clearfix">
									<div class="item-list">
										<ul class="clearfix">
												<?php
		$cid = $_GET['cid'];
		$db = M('article');
		$type = 'new';
		if($cid){
			$db->where("catid=$cid");
		}
		if(0){
			$db->where("id=0");
		}
		if(0){
			$db->where("thumb<>''");
		}
		switch ($type) {
			case 'hot':
					$db->order('click desc');
				break;


			default:
					$db->order('id desc');
		}
		
		$result = $db->limit(5)->all();
		if($result):
		foreach($result as $field):
				$field['url'] = U('article',array('cid'=>$field['catid'],'id'=>$field['id']));
				$field['title'] = mb_substr($field['title'],0,10,'utf8');
				$field['thumb'] = 'http://127.0.0.1/v5/cms/'.$field['thumb'];
			?>
											<li>
												<a title="初识集装箱干燥剂" href="<?php echo $field['url'];?>"><?php echo $field['title'];?></a>
											</li>
										<?php endforeach;endif;?>
										</ul>
									</div>
								</div>
								<div class="block-foot">
									<div>
										<div>-</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--底部-->
	<div id="ft">
		<div class="ft-inner">
			<div class="ft-menu"  id="ft-menu">
				<a href="/page/lianxiwomen" target="_self">联系我们</a>
				|
				<a href="/page/gongsijieshao" target="_self">公司介绍</a>
				|
				<a href="/articles" target="_self">网站新闻</a>
				|
				<a href="/books" target="_self">留言系统</a>
				|
				<a href="/links" target="_self">友情链接</a>
			</div>

			<div class="siteinfo" id="ft-siteinfo">
				<a href="http://www.miibeian.gov.cn/"></a>
			</p>
		</div>
	</div>
</div>
</body>
</html>