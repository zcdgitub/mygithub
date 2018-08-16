<?php
namespace Home\Controller;
class  CommonController extends \Think\Controller{
  		public function gonggong(){	
	  		$tag=M('tag')->select();
	        $ppt = M('ppt')->where(array("pp_view" => 1))->order("pp_time desc")->limit(3)->select();
	        $articles=D('article')->alias('a')->join('left join lt_tag t on a.tag_id=t.t_id')->where("a_view>0")->order('a_time desc')->select();
        	$this->assign('articles',$articles);
		    $this->assign('tag',$tag);
		    $this->assign('ppt',$ppt);	 
  		}








}