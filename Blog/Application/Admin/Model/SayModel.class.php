<?php
namespace Admin\Model;
class SayModel extends \Think\Model{
 	protected $pk='s_id';
	protected $fields=array('s_id','s_content','s_from','s_ip','s_time','s_view','s_hit','s_author');
	protected $_validate=array(
		array('s_content','require','说说内容不能为空',1),
		array('s_time','require','发布时间不能为空',1),
		array('s_author','require','发布人不能为空',1),
		);
	public function addshuoshuo($data){
	
		$data['s_time']=strtotime($data['s_time']);
		$this->add($data);
		return true;
	}

	public function update($data){
		$data['s_time']=strtotime($data['s_time']);
		return $this->save($data);//出错
	}

}