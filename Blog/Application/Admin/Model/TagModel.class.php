<?php
namespace Admin\Model;
class TagModel  extends \Think\Model{
   protected $pk='t_id';//出错,缺失主键名称 model基类，1302行
   protected $fields=array('t_id','t_name','t_time','t_sort','t_view','t_remark','t_ip','t_from','t_root','t_parent_id');
   protected $_validate=array(

   	
            array('t_name','require','栏目标题不可为空',1),
   			array('t_time','require','栏目添加时间不能为空',1),
   			array('t_sort','require','排序不能为空',1),
   			array('t_view','require','请选择是否显示',1),
   			array('t_remark','require','描述不能为空',1),
   			array('t_root','require','操作人不能为空',1),
   			array('t_parent_id','require','上级分类不能为空',1)
   	);
   public function getlist($id=0){//出错，忘了加$id=0
   		$cate=$this->select();
         return $this->fenlei($cate,$id);
   }

   public function fenlei($cate,$id,$lev=1){
	   		static $list=array();
	   	foreach ($cate as $key => $value) {
	   		if($value['t_parent_id']==$id){
	   			$value['lev']=$lev;
	   			$list[]=$value;
	   			$this->fenlei($cate,$value['t_id'],$lev+1);
	   		}
	   	}
	   	return $list;
   }
   public function addcate($data){
   	$data['t_time']=strtotime($data['t_time']);
   	return $this->add($data);
   }
   public function dels($id){//出错
     
    if($this->where("t_parent_id=$id")->find()){
         $this->error="父分类不能删除";
         return false;
      }
   return $this->where("t_id=$id")->delete();
     
   }

   public function update($data){

      $tree=$this->getlist($data['t_id']);
      $tree[]=array('t_id'=>$data['t_id']);//二维数组
      foreach ($tree as $key => $value) {
         if($data['t_parent_id']==$value['t_id']){
            /*$data的t_parent_id就是自身id(上级分类)*/
            $this->error="子分类不能为父类";
            return false;
          }
      }
     
return $this->save($data);
  
   }

}