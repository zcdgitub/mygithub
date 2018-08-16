<?php
namespace Admin\Model;
class AlbumModel extends \Think\Model{
		protected $pk='al_id';
		protected $fields=array('al_id','al_name','al_img','al_time','al_remark','al_hit','al_view','al_ip','al_root','al_from');
		protected $_validate=array(
				array('al_name','require','相册名不能为空',1),
				array('al_remark','require','描述不能为空',1),
				array('al_hit','require','点击量不能为空',1),
				array('al_view','require','请选择是否可见',1),
				array('al_ip','require','发布ip不能为空',1),
				array('al_root','require','发布人不能为空',1),
				array('al_from','require','来自不能为空',1)
			);

		public function addAlbum($data){

			$data['al_time']=strtotime($data['al_time']);
			$upload=new \Think\Upload();
			 $upload->config['subName']='Album';
			 $upload->config['saveName']='al_'.mt_rand();
			$info=$upload->uploadOne($_FILES['al_img']);
			if(!$info){
				$this->error=$upload->getError();
			}
			$img='Uploads/'.$info['savepath'].$info['savename'];
				$data['al_img']=$img;
				return $this->add($data);
		}
		public function dels($id){
			$data= $this->where("al_id=$id")->find();//不仅要删除数据库记录，还要删除上传图片
			unlink($data['al_img']);
			return $this->where("al_id=$id")->delete();
		
		}

		public function update($data){
			$data['al_time']=strtotime($data['al_time']);
			$data= $this->where("al_id=".$data['al_id'])->find();//删除原来的
			unlink($data['al_img']);
			$upload=new \Think\Upload();
			 $upload->config['subName']='Album';
			 $upload->config['saveName']='al_'.mt_rand();
			$info=$upload->uploadOne($_FILES['al_img']);
			if(!$info){
				$this->error=$upload->getError();
			}
			$img="Uploads/".$info['savepath'].$info['savename'];
			$data['al_img']=$img;
			return $this->save($data);


		}



}