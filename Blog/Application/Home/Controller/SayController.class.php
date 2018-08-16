<?php
namespace Home\Controller;
class SayController extends CommonController{


	public function index(){
		$this->gonggong();
       $model=D('admin/say');
       $tag=M('tag')->select();
  		$this->assign('tag',$tag);
  		
       $data=$model->select();
       $this->assign('data',$data);

	   $this->display();
	}
	public function info(){
		$id=I('get.id');
		$model=D('admin/say');
	    $info=$model->where('s_id='.$id)->find();
	    $prev=$model->where("s_id<".$id)->limit(1)->find();
	    $next=$model->where("s_id>".$id)->limit(1)->find();
	 	$this->assign('prev',$prev);
		$this->assign('next',$next);
	    $this->assign('info',$info);
		$this->display();
	}
}