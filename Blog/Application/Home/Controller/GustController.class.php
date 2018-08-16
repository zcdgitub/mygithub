<?php
namespace Home\Controller;
class GustController extends CommonController{
	public function index(){
		if(IS_GET){
			$tag=M('tag')->select();
  			$this->assign('tag',$tag);
  			$this->gonggong();
			$data=D('admin/Gust')->limit(3)->order("g_time desc")->select();
			$this->assign('data',$data);
			$this->display();
		}else{
		  
			$name=I('post.name');
			$content=I('post.content');
			if(empty($name)|| empty($content)){
				$this->ajaxReturn(array('status'=>0,'msg'=>'评论昵称 评论内容不能为空'));
			}
			$data['g_name']=$name;
			$data['g_content']=$content;
			$data['g_time']=time();
		    $res=D('admin/Gust')->add($data);
		  	if(!$res){
				$this->ajaxReturn(array('status'=>0,'msg'=>'添加留言失败'));
			}else{
				$this->ajaxReturn(array('status'=>1,'msg'=>'添加留言成功'));
			}

		}
		
	}

	public function ajaxlist(){
        $num=I('post.num');
        $pagesize=I('post.pagesize');
     	$data=D('admin/Gust')->limit($num,$pagesize)->order("g_time desc")->select();
        echo json_encode($data);
 	}
	
}