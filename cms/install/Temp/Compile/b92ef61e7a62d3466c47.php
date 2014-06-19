<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>环境检测</title>
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
</head>
<body>
	<div class='title-header'>目录检测</div>
	<table class="table1">
	 	<?php $hd["list"]["d"]["total"]=0;if(isset($dir) && !empty($dir)):$_id_d=0;$_index_d=0;$lastd=min(1000,count($dir));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($dir,0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>

			<tr>
				<th class='w100'><?php echo $d;?></th>
				<td>
					<?php echo is_writable($d)?'<span class="success">On</span>':'<span class="error">Off</span>';?>
				</td>
			</tr>
		 <?php $hd["list"]["d"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	</table>
	<br/>
	<div class='title-header'>函数检测</div>
	<table class="table1">
	 	<?php $hd["list"]["d"]["total"]=0;if(isset($functions) && !empty($functions)):$_id_d=0;$_index_d=0;$lastd=min(1000,count($functions));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($functions,0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>

			<tr>
				<th class='w200'><?php echo $d;?></th>
				<td>
					<?php echo function_exists($d)?'<span class="success">On</span>':'<span class="error">Off</span>';?>
				</td>
			</tr>
		 <?php $hd["list"]["d"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	</table>
	<div class='position-bottom'>
	<a href="<?php echo U('index');?>" class='hd-cancel'>上一步</a>
	<a href="javascript:;" url='<?php echo U('set_db');?>' class='hd-success' onclick='check(this);'>下一步</a>
	</div>
	<script>
		function check(obj){
			if($('.error').length>0){
				alert("安装环境不通过,请修正!");
				return false;
			}
			//通过进行下一步
			var url= $(obj).attr('url');
			location.href=url;
		}
	</script>
	</body>
</html>