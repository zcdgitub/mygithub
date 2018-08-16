<?php
namespace Home\Controller;
class AlbumController extends CommonController{ 

   public function index(){
   	$model=M('album');
      $tag=M('tag')->select();
   
$this->assign('tag',$tag);
   	$data=$model->where('al_view>0')->select();
   	$count=$model->count();
   	$this->assign('count',$count);
   	$this->assign('data',$data);
   	$this->display();
   }
   public function look(){
   		$id=I('get.id');
   		$model=M('album');
   		$album=$model->where('al_id='.$id)->find();
   		$this->assign('album',$album);
   		$data=$model->alias('al')->join('left join lt_picture pi on al.al_id=pi.p_pid')->where('al_id='.$id)->select();

   		$this->assign('data',$data);

         $this->gonggong();

   		$this->display();
   }


}