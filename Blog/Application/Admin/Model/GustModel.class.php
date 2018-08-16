<?php
namespace Admin\Model;
class GustModel extends \Think\Model{
     protected $pk='g_id';
	 protected $fields=array('g_id','g_name','g_email','g_img','g_url','g_content','g_time','g_from','g_ip','g_rname','g_rtime','g_rcontent');
	 protected $_validate=array(
			array('g_rname','require','回复人不能为空',1),
   			array('g_rcontent','require','回复内容不能为空',1)
	);
   






}