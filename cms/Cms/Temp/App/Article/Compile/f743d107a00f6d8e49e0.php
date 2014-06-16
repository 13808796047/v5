<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加文章 </title>
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
	
	<script type="text/javascript" src="http://127.0.0.1/v5/cms/Cms/App/Article/Tpl/Article/js/js.js"></script>
</head>
<body>
<div class='wrap'>
	<div class="menu_list">
	 <ul>
		 <li>
		 <a href="<?php echo U('index');?>" class="action"> 文章列表 </a>
		 </li>
		 <li>
		 <a href="<?php echo U('add');?>" > 添加文章</a>
		 </li>
	 </ul>
 </div>
 

 		 <form method='post' class ='hd-form' enctype='multipart/form-data'>
		<div class="tab">
		 <ul class="tab_menu">
		 	<li lab="base">
				<a> 基本设置 </a>
			 </li>
			<li lab="ext" class="action">
				<a> 其他设置 </a>
			</li> 
		 </ul>
		
 		<div class="tab_content">

 		<div id="base">
 			<table class='table1'>
 				<tr>
 					<th class='w100'>标题</th>
 					<td ><input type='text' name='title' class='w300'/></td>
 				</tr>
 				<tr>
 					<th class='w100'>栏目</th>
 					<td>
 						<select name='catid'>
 						<?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

 						<option value='<?php echo $c['cid'];?>'><?php echo $c['_name'];?></option>
 						<?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
 						</select>
 					</td>
 				</tr>
 				<tr>
 					<th class='w100'>缩略图</th>
 					<td ><input type='file' name='thumb' class='w300'/></td>
 				</tr>
 				<tr>
 					<th class='w100'>正文</th>
 					<td >
 						<script type="text/javascript" charset="utf-8" src="http://127.0.0.1/v5/cms/hdphp/hdphp/Extend/Org/Ueditor/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="http://127.0.0.1/v5/cms/hdphp/hdphp/Extend/Org/Ueditor/ueditor.all.min.js"></script><script type="text/javascript">UEDITOR_HOME_URL="http://127.0.0.1/v5/cms/hdphp/hdphp/Extend/Org/Ueditor/"</script><script id="hd_content" name="content" type="text/plain"></script>
        <script type='text/javascript'>
        $(function(){
                var ue = UE.getEditor('hd_content',{
                imageUrl:'http://127.0.0.1/v5/cms/index.php?a=Article&c=Article&m=ueditor_upload&g=App&water=1&uploadsize=2000000&maximagewidth=false&maximageheight=false'//处理上传脚本
                ,zIndex : 0
                ,autoClearinitialContent:false
                ,initialFrameWidth:"100%" //宽度1000
                ,initialFrameHeight:"300" //宽度1000
                ,autoHeightEnabled:false //是否自动长高,默认true
                ,autoFloatEnabled:false //是否保持toolbar的位置不动,默认true
                ,maximumWords:2000 //允许的最大字符数
                ,readonly : false //编辑器初始化结束后,编辑区域是否是只读的，默认是false
                ,wordCount:true //是否开启字数统计
                ,imagePath:''//图片修正地址
                , toolbars:[
            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe','insertcode', 'pagebreak', 'template', 'background', '|',
                'horizontal', 'date', 'time', 'spechars',  'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
                'print', 'preview', 'searchreplace']
            ]//工具按钮
                , initialStyle:'p{line-height:1em; font-size: 14px; }'
            });
        })
        </script>
 					</td>
 				</tr>
 			</table>
 			
 		</div>

 		<div id="ext">
	 		<table class='table1'>
	 				<tr>
	 					<th class='w100'>关键字</th>
	 					<td >
	 					<input type='text' name='keywords' class='w300'/>
	 					</td>
	 				</tr>
	 				<tr>
	 					<th >栏目描述</th>
	 					<td >
							<textarea class='w300 h100' name='description'></textarea>
	 					</td>
	 				</tr>
	 				<tr>
	 					<th >点击次数</th>
	 					<td >
	 					<input type='text' name='click' class='w300' value='100'/>
	 					</td>
	 				</tr>
	 				<tr>
	 					<th >来源</th>
	 					<td >
	 					<input type='text' name='source' class='w300' value='例如:腾讯网'/>
	 					</td>
	 				</tr>
	 				<tr>
	 					<th >作者</th>
	 					<td >
	 					<input type='text' name='author' class='w300' value='<?php echo $_SESSION['username'];?>'/>
	 					</td>
	 				</tr>
	 				<tr>
	 					<th >更新时间</th>
	 					<td >
	 					<input type="text" readonly="readonly" id="updatetime" name="updatetime" value="<?php echo date('Y/m/d h:i:s');?>" class="w150"/>
							<script>
 							$('#updatetime').calendar({format: 'yyyy/MM/dd HH:mm:ss'});
						 </script>
	 					</td>
	 				</tr>
	 		</table>
 		</div>
 	</div>
 	<div class='position-bottom'>
 		<input type='submit' value='确定' class='hd-success'>
 	</div>
 </form>
 </div>
</body>
</html>