<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

	<!--banner-->
	<div id="banner-block">
		<div class="banner-block-width">
			<div id="sys-banner">
				<div id="banner-main" class="banner banner-main">
					<div class="banner-inner">
						<a href="/" target="_self">
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
				<div id="homepg" class="bd-inner">
					<!--检查这里是否为一样-->
					<div class="clearfix layout-home three-cols">
						<div class="main-layout clearfix"></div>
						<div class="col-main">
							<div class="main-wrap">
								<div class="block first-block block-diy list-410" id="block-diy-109067" rel="109067">
									<div class="block-head">
										<div class="head-inner">
											<h2 class="title">公司介绍</h2>

										</div>
									</div>
									<div class="block-content clearfix">
											<?php
		$cid = $_GET['cid'];
		$db = M('article');
		$type = 'new';
		if($cid){
			$db->where("catid=$cid");
		}
		if(5){
			$db->where("id=5");
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
		
		$result = $db->limit(10)->all();
		if($result):
		foreach($result as $field):
				$field['url'] = U('article',array('cid'=>$field['catid'],'id'=>$field['id']));
				$field['title'] = mb_substr($field['title'],0,10,'utf8');
				$field['thumb'] = 'http://127.0.0.1/v5/cms/'.$field['thumb'];
			?>
										<div class="content-text">
											<?php echo mb_substr(strip_tags($field['content']),0,150,'utf8');?>
										</div>
									<?php endforeach;endif;?>
									</div>
									<div class="block-foot">
										<div>
											<div></div>
										</div>
									</div>
								</div>
								<div class="block last-block block-products list-410" id="block-products-109066" rel="109066">
									<div class="block-head">
										<div class="head-inner">
											<h2 class="title">最新产品</h2>
											<div class="links">
												<a class="more" href="/products">更多</a>
											</div>
										</div>
									</div>
									<div class="block-content clearfix">
										<ul class="list-gallery clearfix">
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
		if(1){
			$db->where("thumb<>''");
		}
		switch ($type) {
			case 'hot':
					$db->order('click desc');
				break;


			default:
					$db->order('id desc');
		}
		
		$result = $db->limit(3)->all();
		if($result):
		foreach($result as $field):
				$field['url'] = U('article',array('cid'=>$field['catid'],'id'=>$field['id']));
				$field['title'] = mb_substr($field['title'],0,10,'utf8');
				$field['thumb'] = 'http://127.0.0.1/v5/cms/'.$field['thumb'];
			?>	
											<li>
												<div class="thumb">
													<a href="/products/hailulianyun/115907.html" >
														<img src="<?php echo $field['thumb'];?>" alt="<?php echo $field['title'];?>" width="100%" />
													</a>
												</div>
												<div class="des">
													<p class="default">
														<a href="products/hailulianyun/115907.html" ><?php echo $field['title'];?></a>
													</p>
												</div>
											</li>
										<?php endforeach;endif;?>											
										</ul>
									</div>
									<div class="block-foot">
										<div>
											<div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sub">
							<div class="block first-block block-products  list-270" id="block-products-109065" rel="109065">
								<div class="block-head">
									<div class="head-inner">
										<h2 class="title">产品分类</h2>
										<div class="links">
											<a class="more" href="/products">更多</a>
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
							<div class="block last-block block-diy list-270" id="block-diy-109068" rel="109068">
								<div class="block-head">
									<div class="head-inner">
										<h2 class="title">联系我们</h2>

									</div>
								</div>
								<div class="block-content clearfix">
									<div class="content-text">
										<span style="white-space:nowrap;">地址：软件园二期望海路2号</span>
										<br />
										<span style="white-space:nowrap;">电话：025-1234567</span>
										<br />
										<span style="white-space:nowrap;">邮箱：web@aaaa.com</span>
										<br />
										<span style="white-space:nowrap;">服务热线：4999-666-666</span>
										<br />
									</div>
								</div>
								<div class="block-foot">
									<div>
										<div></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-extra">
							<div class="block first-block block-articles  list-250" id="block-articles-109059" rel="109059">
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
												<a title="<?php echo $field['title'];?>" href="<?php echo $field['url'];?>"><?php echo $field['title'];?></a>
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
							<div class="block last-block block-articles  list-250" id="block-articles-109069" rel="109069">
								<div class="block-head">
									<div class="head-inner">
										<h2 class="title">热门文章</h2>
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
		$type = 'hot';
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
												<a title="<?php echo $field['title'];?>" href="<?php echo $field['url'];?>"><?php echo $field['title'];?></a>
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

</div>

</div>

</body>
</html>