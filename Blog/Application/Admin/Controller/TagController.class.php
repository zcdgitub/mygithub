<?php
namespace Admin\Controller;
class TagController extends AuthController{

	public function add(){
		if(IS_GET){

			$model=D('tag');

			$data=$model->getlist();//二维数组
			

			$this->assign('data',$data);
			$this->display();
		}else{
 
			$model=D('tag');
			$data=$model->create();
		
			if(!$data){
				$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
			}
			$res=$model->addcate($data);
			if(!$res){
				$this->ajaxReturn(array('status'=>0,'msg'=>'添加栏目失败'));
			}else{
				$this->ajaxReturn(array('status'=>1,'msg'=>'添加栏目成功'));
			}
		}
	}
	public function index(){
		$model=D('tag');
		$data=$model->select();
		$count=$model->count();
		$pagesize=3;
		$page=new \Think\Page($count,$pagesize);
		$show=$page->show();
		$p=I('get.p');
		$data=$model->page($p,$pagesize)->select();
	
	
		

		$this->assign('count',$count);
		$page=array('data'=>$data,'show'=>$show);
		$this->assign('page',$page);
		$this->display();
	}

	public function dele(){
		 
		$id=I('post.dele_id');
		$model=D('tag');
		$res=$model->dels($id);
		if($res===false){
			$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'删除栏目成功'));
		}
	}

	public function edit(){
		if(IS_GET){
			$id=I('get.id');
			$model=D('tag');
			$data=$model->where("t_id=$id")->find();
			$cate=$model->getlist();
			$this->assign('cate',$cate);
			$this->assign('data',$data);
			$this->display();
		}else{
			$model=D('tag');
			$data=$model->create();
			
			if(!$data){
				$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
			}

			$res=$model->update($data);//更新没变化，返回值0
	
			if($res===false){
				$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
			}else{
				$this->ajaxReturn(array('status'=>1,'msg'=>'更新栏目成功'));
			}
		}
	}	
}