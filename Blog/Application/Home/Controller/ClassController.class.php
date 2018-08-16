<?php
namespace Home\Controller;
class ClassController extends CommonController{

			public function index(){
				
				    $id=I('get.id');
					$article=M('article')->alias('a')->join('left join lt_tag t on a.tag_id=t.t_id')->where("a_view>0 and tag_id=".$id)->order('a_time desc')->select();
					
					$this->assign('article',$article);
					 $this->gonggong();
					$this->display();
			}

			public function search(){
				$key=I('post.key');
				$key="%$key%";
				$where['a_title|a_content']=array('like',"$key");
				$where['a_view']=array('gt','0');
				$article=M('article')->alias('a')->join('left join lt_tag t on a.tag_id=t.t_id')->where($where)->select();
   				$this->assign('article',$article);
   				$this->gonggong();
   				$this->display();

               
			}







}