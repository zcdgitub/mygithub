<?php
namespace Admin\Controller;
class IndexController extends AuthController {
	//后台首页
    public function index(){
  
 
    	$this->display();
    }
	
	/*public function out(){
		session(null);
		$this->redirect("/Admin/Login/index");
	}		*/
}