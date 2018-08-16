<?php
namespace Admin\Model;
class ArticleModel extends \Think\Model{
   protected $pk='a_id';
	protected $fields=array('a_id','a_img','a_title','a_remark','a_keyword','a_time','a_content','a_view','a_hit','a_original','a_from','a_author','a_ip','tag_id');
	protected $_validate=array(
			array('a_title','require','文章标题不能为空',1),
   			array('a_remark','require','文章描述不能为空',1),
   			array('a_keyword','require','文章关键词不能为空',1),
   			array('a_time','require','文章发布时间不能为空',1),
   			array('a_view','require','请选择是否显示',1),
   			array('a_content','require','文章内容不能为空',1),
   			array('a_hit','require','文章点击不能为空',1),
   			array('a_original','require','请选择是否原创',1),
   			array('a_from','require','文章来自不能为空',1),
   			array('a_author','require','文章作者不能为空',1),
   			array('a_ip','require','发表ip不能为空',1),
   			array('tag_id','require','文章分类不能为空',1)
		);
    /* public function _before_insert(&$data){
//追加元素只能在控制器？？？？
  

      

      }*/
   	public function addarticle($data){
    $data['a_time']=strtotime($data['a_time']);
         $upload = new \Think\Upload();
         $upload->config['subName']='Album';
         $upload->config['saveName']='ar_'.mt_rand().Date.getTime();
  
         $info = $upload->uploadOne($_FILES['a_img']);//这一步文件夹和文件名已确定
       
        $img='Uploads/'.$info['savepath'].$info['savename'];
         
         if(!$info){
              $this->error=$upload->getError();
         }
       
           $data['a_img']=$img;//随意切换图片或者缩略图
   		     return $this->add($data);
   	}
        public function dels($id){
          $data=$this->where("a_id=$id")->find();
           unlink($data['a_img']);
          return $this->where("a_id=$id")->delete();
        }
      public function update($data){
          $data['a_time']=strtotime($data['a_time']);
          $data=$this->where("a_id=".$data['a_id'])->find();
          unlink($data['a_img']);
           $upload = new \Think\Upload();
         $upload->config['subName']='Album';
          $upload->config['saveName']='ar_'.mt_rand();
         $info = $upload->uploadOne($_FILES['a_img']);
         if(!$info){
              $this->error=$upload->getError();
         }
           $img='Uploads/'.$info['savepath'].$info['savename'];
           $data['a_img']=$img;//随意切换图片或者缩略图

        return $this->save($data);
      }
}
/*["savename"] => string(17) "5ac43c3470fa3.jpg"
  ["savepath"] => string(11) "2018-04-04/"*/