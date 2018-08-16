<?php
namespace Admin\Controller;
class UserController extends \Think\Controller{
	public function login(){
		if(IS_GET){
			$this->display();
		}else{
			$username=I('post.username');
			$password=I('post.password');
			if(empty($username) || empty($password)){
				$this->ajaxReturn(array('status'=>0,'msg'=>'用户名或者密码不能为空'));
			}
	

			$model=D('User');
			$res=$model->getlogin($username,$password);
		
			if($res){     
				$this->ajaxReturn(array('msg'=>'欢迎'.$username.'登陆后台','status'=>1));
			}else{
				$this->ajaxReturn(array('msg'=>$model->getError(),'status'=>0));
			}
		}
	}
/*	public function verify(){
		ob_clean();
		$config=array('length'=>3);
		$verify=new \Think\Verify($config);//生成一张验证码图片
		$verify->entry();
	}*/

}