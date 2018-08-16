<?php
namespace Admin\Model;
class PictureModel extends \Think\Model{
	 protected $pk='p_id';
	 protected $fields=array('p_id','p_pid','p_img','p_thumb','p_remark','p_time','p_view','p_root','p_ip','p_from');
	 protected $_validate=array(
	 	array('p_pid','require','相册不能为空',1),
	 	array('p_remark','require','图片描述不能为空',1),
	 	array('p_time','require','上传时间不能为空',1),
	 	array('p_view','require','请选择是否显示',1),
	 	array('p_root','require','图片发布者不能为空',1),
	 	array('p_ip','require','发布ip不能为空',1),
	 	array('p_from','require','来自不能为空',1)
	 	);
	 public function addpicture($data){

		$data['p_time']=strtotime($data['p_time']);
		$upload=new \Think\Upload();
		  $upload->config['subName']='Album';
		  $upload->config['saveName']='pic_'.strtotime('now');
		$info=$upload->uploadOne($_FILES['p_img']);
		if(!$info){
			$this->error=$upload->getError();
		}
		
		$img="Uploads/".$info['savepath'].$info['savename'];
		$thumb=new \Think\Image();
		$thumb->open($img);
		$thumb_img="Uploads/Thumb/thumb_".$info['savename'];
		$thumb->thumb(200,100)->save($thumb_img);
		$data['p_img']=$img;
		$data['p_thumb']=$thumb_img;
		return $this->add($data);
	 }
	 public function del($id){
       $data=$this->where("p_id=$id")->find();
       unlink($data['p_img']);
       unlink($data['p_thumb']);
       return $this->where("p_id=$id")->delete();
	 }


	 public function update($data){
	 	$data['p_time']=strtotime($data['p_time']);
	 	$data=$this->where("p_id=".$data['p_id'])->find();//从数据库检出
		   unlink($data['p_img']);
		   unlink($data['p_thumb']);
	   $upload=new \Think\Upload();
	    $upload->config['subName']='Album';
	    $upload->config['saveName']='pic_'.strtotime('now');
	   $info=$upload->uploadOne($_FILES['p_img']);
	   if(!$info){
	   	$this->error=$upload->getError();
	   }
	   	$thumb=new \Think\Image();
   		$img="Uploads/".$info['savepath'].$info['savename'];
	   	$thumb->open($img);
	   	$thumb_img="Uploads/Thumb/thumb_".$info['savename'];
	   	$thumb->thumb(200,100)->save($thumb_img);
	   	$data['p_img']=$img;//表单没有但数据库有的字段在这个地方追加
		$data['p_thumb']=$thumb_img;
		return $this->save($data);

	 }

}