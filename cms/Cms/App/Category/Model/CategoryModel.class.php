<?php
	//栏目操作模型
	Class CategoryModel extends Model{
		//设置模型主表
		public $validate = array(
			array('cname','nonull','栏目名不能为空',2,3),
			);
		Public $table ='category';
		Public function add_category(){
			//create 就是对数据执行自动验证
			if($this->create()){
				//向表中写入数据
					if($this->add()) {
					//更新缓存
					return $this->update_cache();
				}
			}
		}
			//修改栏目
		Public function edit_category(){
			
			if($this->create()){

				if($this->save()) {
					//更新缓存
					return $this->update_cache();
				}
				
			}
		}
		//删除栏目
		Public function del_category(){
			$cid=Q('cid');
			$category = $this->all();
			//判断当前要删除的栏目有没有子栏目
			if($this->where('pid='.$cid)->find()){
				$this->error='请先删除子栏目';
			}else{
			if($this->del($cid)) {
					//更新缓存
					return $this->update_cache();
				}
			}
		}
		//更新栏目缓存
		Public function update_cache(){
			//获得表中的所有栏目数据
			$category = Data::tree($this->all(),'cname');
			return F('category',$category);//file_put_contents()储存文件缓存
		}
	}
