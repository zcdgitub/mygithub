<?php
namespace Admin\Controller;
class ArticleController extends AuthController{

	public function add(){
		if(IS_GET){
			$model=D('tag');
			$data=$model->getlist();	
			$this->assign('data',$data);
			$this->display();
		}else{
			$model=D('article');
			$data=$model->create();
			if(!$data){
				$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
			}
			$res=$model->addarticle($data);
			if(!$res){
				$this->ajaxReturn(array('status'=>0,'msg'=>'添加文章失败'));
			}else{
				$this->ajaxReturn(array('status'=>1,'msg'=>'添加文章成功'));
			}
		}
	}
	public function index(){
		$model=D('article');
		$data=$model->select();
		$count=$model->count();
		$pagesize=2;
		$page=new \Think\Page($count,$pagesize);
		$show=$page->show();
		$p=I('get.p');
		$data=$model->page($p,$pagesize)->select();
		$data=array('show'=>$show,'data'=>$data);
		$this->assign('count',$count);
		$this->assign('data',$data);
		$this->display();
	}
	public function del(){
		$id=I('post.dele_id');
		$model=D('article');
		$res=$model->dels($id);
		if($res===false){
			$this->ajaxReturn(array('status'=>0,'msg'=>'删除失败'));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'删除成功'));
		}
	}

public function edit(){
	if(IS_GET){
		$id=I('get.id');//出错，编辑思路不清
		$cate=D('tag')->select();
		$data=D('article')->where("a_id=$id")->find();
		$this->assign('data',$data);
		$this->assign('cate',$cate);
		$this->display();
	}else{
		$model=D('article');
		$data=$model->create();
		if(!$data){
			$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
		}
		
		$res=$model->update($data);
		if($res===false){
			$this->ajaxReturn(array('status'=>0,'msg'=>'编辑文章失败'));   
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'编辑文章成功'));
		}

	}
}








}