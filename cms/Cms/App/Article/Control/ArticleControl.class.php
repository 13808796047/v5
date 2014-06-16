<?php
/**
 *文章管理 
 */
Class ArticleControl extends AuthControl{
	//模型
	Private $db;
	//栏目缓存
	Private $_category;
	//构造函数
	Public function __init(){
		$this->db= K('article');
		//栏目缓存
		$this->_category = F('category');
		
	}
	//显示文章
	Public function index(){
		$page = new Page($this->db->count(),1);
		$this->page = $page->show(1);

		$this->article = $this->db->limit($page->limit())->all();
		$this->display();
	}
	//添加文章
	Public function add(){
		if(IS_POST){
			//通过模型完成文章的添加
			if($this->db->add_article()){
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->category=$this->_category;
			$this->display();
			}
		}
	//修改文章
		Public function edit(){
				$id = Q('id',NULL,'intval');
			//必须传递修改文章的id
				if(!$id)$this->error('参数传递错误!');
				if(IS_POST){
				
					//通过模型完成文章的修改
				if($this->db->edit_article()){
					$this->success('修改成功','index');
				}else{
					$this->error('修改失败',$this->db->error);
				}
				
					}else{
					$field=$this->db->find($id);
					$this->field = $field;
					$this->category=$this->_category;
					$this->display();
				}

			 
		  }
		
	}