<?php
Class ConfigModel extends Model{
	//操作的数据表
	Public $table = 'config';
	//获得配置项
	Public function get_all(){
		$config = $this->all();
		//获得配置项的HTML表示
		foreach($config as $n=>$c ){
			$config[$n]['html'] = $this->get_config_html($c);
		}
		return $config;
	}
	//根据不同类型获得配置项的html表示
	Private function get_config_html($c){
		switch ($c['show_type']) {
			case 1://文本框
				$html="<input type='text' name='{$c['id']}' class='w200' value='{$c['value']}'>";
				break;
			case 2://单选框
				$option = $c['option'];
				$data = explode(',',$option);
				$html = '';
				foreach ($data as $d ) {
					$tmp = explode('|',$d);
					$checked = $c['value'] == $tmp[0]?'checked=""':'';
					$html .= "<label><input type='radio' name='{$c['id']}' $checked value='{$tmp[0]}'/> {$tmp[1]}</label>&nbsp;&nbsp;&nbsp;";
				}
				break;
			case 3://文本域
				$html = "<textarea name='{$c['id']}' class='w300 h100'>{$c['value']}</textarea>";
			
		}
		return $html;
	}
	/**
	 * 修改配置项
	 */
	Public function update_config(){
		foreach ($_POST as $id => $value) {
			$this->save(array('id'=>$id,'value'=>$value));
		}
		$config = $this->all();
		$d = array();
		foreach ($config as $c) {
			$d[$c['name']]=$c['value'];
		}

		//更新配置文件
		$data = "<?php if(!defined('HDPHP_PATH'))exit;\nreturn ".var_export($d,true).";\n?>";
		file_put_contents('data/config/config.inc.php', $data);
		return true;
	} 
}