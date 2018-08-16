<?php
namespace Home\Controller;
class PublicController extends \Think\Controller{
		public function nav(){

		$tag=M('tag')->select();
		return $tag;
		

		}
} 