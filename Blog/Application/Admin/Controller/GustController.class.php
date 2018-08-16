<?php
namespace Admin\Controller;
class GustController extends AuthController{
	public function index(){
	 	$model=D('gust');
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
   	$model=D('gust');
   	$res=$model->where('g_id='.$id)->delete();
   	if($res===false){
			$this->ajaxReturn(array('status'=>0,'msg'=>'删除失败'));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'删除成功'));
	}
   }
   public function edit(){
   	if(IS_GET){
	   	$id=I('get.id');
	    $model=D('gust');
	    $data=$model->where('g_id='.$id)->find();
	  
		$this->assign('data',$data);
	   	$this->display();
    }else{
        $model=D('gust');
		$data=$model->create();
		if(!$data){
			$this->ajaxReturn(array('status'=>0,'msg'=>$model->getError()));
		}
			$data['g_rtime']=time();
			
        $res=$model->save($data);//出错
		if(!$res){
			$this->ajaxReturn(array('status'=>0,'msg'=>'回复评论失败'));
		}else{
			$this->ajaxReturn(array('status'=>1,'msg'=>'回复评论成功'));
		}


   	}


 }


}