<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $field['cname'];?></title>
	<meta content="网站新闻, " name="keywords" />
	<meta content="绿黑色物流网站设计G的网站新闻列表信息。" name="description" />
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/cms/template/default/static/css/css1.css" />
	<script type='text/javascript' src='http://127.0.0.1/v5/cms/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/v5/cms/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/v5/cms/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/v5/cms/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/v5/cms/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
HOST = '<?php echo $GLOBALS['user']['HOST'];?>';
ROOT = '<?php echo $GLOBALS['user']['ROOT'];?>';
WEB = '<?php echo $GLOBALS['user']['WEB'];?>';
URL = '<?php echo $GLOBALS['user']['URL'];?>';
HDPHP = '<?php echo $GLOBALS['user']['HDPHP'];?>';
HDPHPDATA = '<?php echo $GLOBALS['user']['HDPHPDATA'];?>';
HDPHPTPL = '<?php echo $GLOBALS['user']['HDPHPTPL'];?>';
HDPHPEXTEND = '<?php echo $GLOBALS['user']['HDPHPEXTEND'];?>';
APP = '<?php echo $GLOBALS['user']['APP'];?>';
CONTROL = '<?php echo $GLOBALS['user']['CONTROL'];?>';
METH = '<?php echo $GLOBALS['user']['METH'];?>';
GROUP = '<?php echo $GLOBALS['user']['GROUP'];?>';
TPL = '<?php echo $GLOBALS['user']['TPL'];?>';
CONTROLTPL = '<?php echo $GLOBALS['user']['CONTROLTPL'];?>';
STATIC = '<?php echo $GLOBALS['user']['STATIC'];?>';
PUBLIC = '<?php echo $GLOBALS['user']['PUBLIC'];?>';
HISTORY = '<?php echo $GLOBALS['user']['HISTORY'];?>';
HTTPREFERER = '<?php echo $GLOBALS['user']['HTTPREFERER'];?>';
TEMPLATE = '<?php echo $GLOBALS['user']['TEMPLATE'];?>';
</script>
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
						<a href="/?lang__Template__uage=eng">English</a>
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
						<a href="/articles" target="_self">
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
						<div class="col-main">
							<div class="main-wrap">
								<div id='articles-list' class="block first-block">
									<div class="block-head">
										<div class="head-inner">
											<h2 class="title"><?php echo $field['cname'];?></h2>
										</div>
									</div>
									<div class="block-content clearfix">
										<div class="list-table">
											<table class="data">
												<thead>
													<tr>
														<th class="title">分类/标题</th>
														<th class="time">发布</th>
													</tr>
												</thead>
												<tbody>
														<?php
		$cid = $_GET['cid'];
		$data = Data::channelList(F('category'),$cid,'','cid');
		$tmp = array();
		foreach ($data as $d) {
			$tmp[]=$d['cid'];
		}
		$Where = 'cid in('.implode(',', $tmp).')';
		
		$db = K('ArticleView');
		$row = 1;
		$where = "catid=$cid";
		$page = new Page($db->where($where)->count(),$row);
		$result = $db->where($where)->limit($page->limit())->all();
	
		if($result):
		foreach($result as $field):
			$field['caturl'] = U('channel',array('cid'=>$field['cid']))
			?>
													<tr>
														<td class="title">
															<span class="catalog">
																[
																<a href="" title="媒体报道"><?php echo $field['cname'];?></a>
																]
															</span>
															<a href="" target="_blank" >
																<span class="style1"><?php echo $field['title'];?></span>
															</a>
														</td>
														<td><?php echo date('Y-m-d',$field['addtime']);?></td>
													</tr>
												<?php endforeach;endif;?>
												</tbody>
											</table>
										</div>
										<div class="pager clearfix">
											<div class="page1">

												<?php echo $page->show(1);?>

											</div>
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
										<h2 class="title">产品展示</h2>
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
				$field['title'] = mb_substr($field['title'],0,10,'utf8');
				$field['thumb'] = 'http://127.0.0.1/v5/cms/'.$field['thumb'];
			?>
											<li>
												<a title="初识集装箱干燥剂" href="/articles/meitibaodao/73640.html"><?php echo $field['title'];?></a>
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