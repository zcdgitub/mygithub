<?php
namespace Admin\Controller;
use Think\Controller;

class AuthController extends Controller{
	
	public function __construct(){
		parent::__construct(); 
		$admin=cookie('admin');//用cookie函数设置和访问必须一致
		if(!$admin){
			$this->redirect('User/login');
		}
	}
}
