<?php
namespace Admin\Controller;
class PictureController extends AuthController{

	public function add(){
			if(IS_GET){
				$model=D('album');
				$data=$model->select();
				$this->assign('data',$data);
				$this->display();
			}else{
				$model=D('picture');
				$data=$model->create();

				if(!$data){
					$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
				}
				$res=$model->addpicture($data);
				if(!$res){
				$this->ajaxReturn(array('status'=>0,'msg'=>'添加图片失败'));
				}else{
				$this->ajaxReturn(array('status'=>1,'msg'=>'添加图片成功'));
				}	
			}
	}
	public  function index(){
		$model=D('picture');
		$data=$model->select();
		
	
		$this->assign('data',$data);
		$this->display();
	}
	public function delete(){
		$id=I('post.dele_id');
		$model=D('picture');
		$res=$model->del($id);
		if($res===false){
			$this->ajaxReturn(array('status'=>0,'msg'=>'删除失败'));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'删除成功'));
		}
	}
	  public function edit(){
	  		if(IS_GET){
	  			$model=D('album');
	  			$album=$model->select();
	  	        $id=I('get.id');
	  	  	$data=D('picture')->where("p_id=$id")->find();
				$this->assign('data',$data);	  		
	  			$this->assign('album',$album);
	  			$this->display();
	  		}else{
	  			$model=D('picture');
	  			$data=$model->create();
		  		if(!$data){
		  			$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
		  		}
	  			$res=$model->update($data);
	  			if($res===false){
	  				$this->ajaxReturn(array('status'=>0,'msg'=>'更新图片失败'));
	  			}else{
	  				$this->ajaxReturn(array('status'=>1,'msg'=>'更新图片成功'));
	  			}	
	  		}
	  }
}