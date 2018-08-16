<?php
namespace Admin\Model;
class UserModel extends \Think\Model{

		public function getlogin($username,$password){
			
			$info=$this->where("u_name='$username'")->find();
			if(!$info){
				$this->error='管理员不存在';
				return false;
			}
			$password=md5($password);
			if($password!=$info['u_password']){
				$this->error='密码错误';
				return false;
			}
			cookie('admin',$info['u_name']);
			
			return true;
		}
}