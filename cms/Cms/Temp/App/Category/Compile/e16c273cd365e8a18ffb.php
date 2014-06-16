<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加栏目 </title>
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
</script>
	<script type="text/javascript" src="http://127.0.0.1/v5/cms/Cms/App/Category/Tpl/Category/js/validate.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/v5/cms/Cms/App/Category/Tpl/Category/js/js.js"></script>
</head>
<body>
	<div class="menu_list">
	 <ul>
		 <li>
		 <a href="<?php echo U('index');?>"> 栏目列表 </a>
		 </li>
			<li>
				<a href="javascript:;">添加顶级栏目</a>
			</li>
		 <li>
		 <a href="<?php echo U('update_cache');?>"> 更新栏目缓存 <a/>
		 </li>
	 </ul>
 </div>
  <div class='title-header'>添加栏目</div>
 <form method='post' class ='hd-form' onsubmit="return hd_submit(this,'<?php echo U(index);?>')">
 <input type='hidden' name='pid' value='<?php echo _default($_GET['pid'],0);?>'>
 	<table class='table1'>
 		<tr>
	 		<th class='w100'>栏目名称</th>
	 		<td>
	 			<input type='text' name ='cname' class='w200'>
	 		</td>
 		</tr>
 		<tr>
	 		<th class='w100'>关键字</th>
	 		<td>
	 			<input type='text' name ='keywords' class='w300'>
	 		</td>
 		</tr>
 		<tr>
	 		<th class='w100'>栏目描述</th>
	 		<td>
	 			<textarea name='description' class='w300 h100'>
	 				
	 			</textarea>
	 		</td>
 		</tr>
 	</table>
 	<div class='position-bottom'>
 		<input type='submit' value='确定' class='hd-success'>
 	</div>
 </form>
</body>
</html>