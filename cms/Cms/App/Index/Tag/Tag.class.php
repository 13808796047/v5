<?php

Class Tag{
	Public $tag = array(
		'arclist'=>array('block'=>1,'level'=>3),
		'channel'=>array('block'=>1,'level'=>3)
		);
	/**
	 * 栏目标签
	 * @param  [type] $attr    [description]
	 * @param  [type] $content [description]
	 * @return [type]          [description]
	 */
	Public function _channel($attr,$content){
		$type=isset($attr['type'])?$attr['type']:'self';
		$cid=isset($attr['cid'])?intval($attr['cid']):0;
		$php = <<<str
		<?php
		\$type='$type';
		\$cid ='$cid';
		\$db = M('category');
		\$result = array();
		switch(\$type){
			case 'self'://显示同级栏目,需要栏目cid
			break;
			case 'son'://子栏目,需要栏目cid

			if(\$cid){
				\$result=\$db->where('pid=$cid')->all();
			}
			break;
			case 'top'://一级栏目
			\$result = \$db->where('pid=0')->all();
			break;
		}
		
		if(\$result):
		foreach(\$result as \$field):
			\$field['url'] = U('channel',array('cid'=>\$field['cid']))
			?>
str;
		$php.=$content;
		$php.='<?php endforeach;endif;?>';
		return $php;

	}
	/**
	 * 获取文章列表
	 * @param  [type] $attr    [description]
	 * @param  [type] $content [description]
	 * @return [type]          [description]
	 */
	Public function _arclist($attr,$content){
		//显示条数
		$row = isset($attr['row'])?$attr['row']:10;
		//显示类型 hot热门文章 new 最新文章
		$type = isset($attr['type'])?$attr['type']:'new';
		//标题长度
		$titlelen = isset($attr['titlelen'])?$attr['titlelen']:'10';
		//是否只获取有缩略图的文章 1获取只有图片的 0 有没都行
		$image= intval(isset($attr['image'])?$attr['image']:0);
		//获取指定文章
		$id= intval(isset($attr['id'])?$attr['id']:0);

		$php = <<<str
		<?php
		\$db = M('article');
		\$type = '$type';
		if($id){
			\$db->where("id=$id");
		}
		if($image){
			\$db->where("thumb<>''");
		}
		switch (\$type) {
			case 'hot':
					\$db->order('click desc');
				break;


			default:
					\$db->order('id desc');
		}
		
		\$result = \$db->limit($row)->all();
		if(\$result):
		foreach(\$result as \$field):
				\$field['title'] = mb_substr(\$field['title'],0,$titlelen,'utf8');
				\$field['thumb'] = '__ROOT__/'.\$field['thumb'];
			?>
str;
		$php.=$content;
		$php.='<?php endforeach;endif;?>';
		return $php;
	}
}