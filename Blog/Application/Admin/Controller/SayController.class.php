<?php
namespace Admin\Controller;
class SayController extends AuthController{
	public function add(){//add
		if(IS_GET){
			$this->display();
		}else{
			$model=D('Say');
			$data=$model->create();
			
			if(!$data){
				$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));

			}
			$res=$model->addshuoshuo($data);
			if(!$res){
				$this->ajaxReturn(array('status'=>0,'msg'=>'发布说说失败'));
			}else{
				$this->ajaxReturn(array('status'=>1,'msg'=>'发布说说成功'));
			}
		}
	}
	public function index(){// 原本index list是保留字，必须换文件名 //富文本编辑入库会自动转码，无需再用htmlspecials进行转换
		

		$model=D('Say');
	

		$count=$model->count();
		$this->assign('count',$count);
		$pagesize=2;
		$page=new \Think\Page($count,$pagesize);
		$show=$page->show();
		$p=I('get.p');
		$data=$model->order("s_time desc")->page($p,$pagesize)->select();
	
		$page=array('data'=>$data,'show'=>$show);
		$this->assign('page',$page);
		$this->display();
	}
	public function dele(){
		$id=I('post.dele_id');
		
	
		$model=D('say');
		$res=$model->where("s_id=$id")->delete();

		if($res===false){
			$this->ajaxReturn(array('status'=>0,'msg'=>'删除说说失败'));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'删除说说成功'));
		}
	}
	
	public function edit(){
		if(IS_GET){
			$id=I('get.id');
			$model=D('say');
			$shuoshuo=$model->where("s_id=$id")->find();
			$this->assign('shuoshuo',$shuoshuo);
			$this->display();
		}else{
				$model=D('say');				
				$data=$model->create();
				//data接收
				if(!$data){
					$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
				}
			
				$res=$model->update($data);			
				if($res===false){
					$this->ajaxReturn(array('status'=>0,'msg'=>'编辑说说失败'));   
				}else{
					$this->ajaxReturn(array('status'=>1,'msg'=>'编辑说说成功'));
				}
				


		}

	}

}