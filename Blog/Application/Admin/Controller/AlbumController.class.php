<?php
namespace Admin\Controller;
class AlbumController extends AuthController{

 public function add(){
 	if(IS_GET){
 		$this->display();    
 	}else{
 		$model=D('album');
 		$data=$model->create();
 		
 		if(!$data){
 			$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
 		}
 		$res=$model->addAlbum($data);
 	
 		if(!$res){
			$this->ajaxReturn(array('status'=>0,'msg'=>'添加相册失败'));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'添加相册成功'));
		}	
 	}
 }

 public function index(){
 		$model=D('album');
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
		$model=D('album');
		$res=$model->dels($id);
		if($res===false){
			$this->ajaxReturn(array('status'=>0,'msg'=>'删除失败'));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'删除成功'));
		}
	}
		public function edit(){
			if(IS_GET){
				$id=I('get.id');
				$model=D('album');
				$data=$model->where("al_id=$id")->find();
				$this->assign('data',$data);
				$this->display();
			}else{
				$model=D('album');
				$data=$model->create();
				
				if(!$data){
				$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
				}
				$res=$model->update($data);
				if($res===false){
					$this->ajaxReturn(array('status'=>0,'msg'=>'编辑相册失败'));   
				}else{
					$this->ajaxReturn(array('status'=>1,'msg'=>'编辑相册成功'));
				}
			}
		}
}