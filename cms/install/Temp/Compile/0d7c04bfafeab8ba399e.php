<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>设置数据库参数</title>
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
TPL = '<?php echo $GLOBALS['user']['TPL'];?>';
CONTROLTPL = '<?php echo $GLOBALS['user']['CONTROLTPL'];?>';
STATIC = '<?php echo $GLOBALS['user']['STATIC'];?>';
PUBLIC = '<?php echo $GLOBALS['user']['PUBLIC'];?>';
HISTORY = '<?php echo $GLOBALS['user']['HISTORY'];?>';
HTTPREFERER = '<?php echo $GLOBALS['user']['HTTPREFERER'];?>';
</script>
	<script type="text/javascript" src="http://127.0.0.1/v5/cms/install/./Tpl/Index/js/set_db.js"></script>
</head>
<body>

	<div class='wrap'>
	<form class='hd-form' method="post">
	<div class='title-header'>数据库参数设置</div>
		<table class="table1">
			<tr>
				<th class='w100'>主机</th>
				<td>
					<input type='text' name='DB_HOST' value='localhost'>
				</td>
			</tr>
			<tr>
				<th class='w100'>端口</th>
				<td>
					<input type='text' name='DB_PROT' value='3306'>
				</td>
			</tr>
			<tr>
				<th class='w100'>账号</th>
				<td>
					<input type='text' name='DB_USER' value='root'>
				</td>
			</tr>
			<tr>
				<th class='w100'>密码</th>
				<td>
					<input type='text' name='DB_PASSWORD' >
				</td>
			</tr>
			
			<tr>
				<th class='w100'>数据库</th>
				<td>
					<input type='text' name='DB_NAME' value='vv' >
				</td>
			</tr>
			<tr>
				<th class='w100'>表前缀</th>
				<td>
					<input type='text' name='DB_PREFIX' value='cms_'>
				</td>
			</tr>
		</table>
		<br/>
		<div class='title-header'>管理员账号</div>
		<table class="table1">
			<tr>
				<th class='w100'>账号</th>
				<td>
					<input type='text' name='username' value='admin'>
				</td>
			</tr>
				<tr>
				<th class='w100'>密码</th>
				<td>
					<input type='text' name='password' >
				</td>
			</tr>
		</table>
		<div class='position-bottom'>
		<a href="<?php echo U('check');?>" class='hd-cancel'>上一步</a>
		<button type='submit' class='hd-success'>下一步</button>
	</div>
	
	</form>
	</div>
</body>
</html>