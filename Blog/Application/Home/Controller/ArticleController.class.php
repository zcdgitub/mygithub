<?php
namespace Home\Controller;
class ArticleController extends CommonController{

	public function index(){

		if(IS_GET){
			$id=I('get.id');
			$model=D('article');
			if (!isset($_COOKIE['a_id'])) {
				$hit=$model->where("a_id=$id")->setInc('a_hit');
				$a=array();
				$a[]=$id;
				setcookie('a_id',serialize($a),time()+360);
				$this->gong($id);
			}else{
				$c=unserialize($_COOKIE['a_id']);
				if(in_array($id,$c)){
				$this->gong($id);
				}else{
					$hit=$model->where("a_id=$id")->setInc('a_hit');
					$a=array();
					$a[]=$id;
					setcookie('a_id',serialize($a),time()+360);
					$this->gong($id);	
				}
			}
		}else{
			$name=I('post.name');
			$content=I('post.content');
			$pid=I('post.pid');
			$aid=I('post.aid');

			if(empty($name) || empty($content)){
				$this->ajaxReturn(array('status'=>0,'msg'=>'昵称或者评论内容不能为空'));
			}
			$model=M('article_c');
			$data['ac_name']=$name;
			$data['ac_content']=$content;
			$data['p_id']=$pid;
			$data['ac_pid']=$aid;
			$data['ac_time']=time();
			$res=$model->add($data);

			if(!$res){
				$this->ajaxReturn(array('status'=>0,'msg'=>'添加评论失败'));
			}else{
				$this->ajaxReturn(array('status'=>1,'msg'=>'添加评论成功'));
			}
		}

	}
			
		public function gong($id,$ppid=0){

			$article_s=M('article_c')->where("ac_pid=".$id)->select();
			
		 	$article_c=$this->fenlei($article_s,$ppid);
			
			$count=M('article_c')->where("ac_pid=".$id)->count();//每篇文章评论数量
			$model=D('article');
			$data=$model->alias('a')->join('left join lt_tag t on a.tag_id=t.t_id')->where("a_id=$id")->find();
			$prev=$model->where('a_id<'.$id)->order('a_id desc')->limit(1)->find();
		/*	上一篇遵循的还是id数值大小，小的是上一篇*/
			$next=$model->where('a_id>'.$id)->order('a_id asc')->limit(1)->find();	
			$this->assign('prev',$prev);
			$this->assign('next',$next);
			$this->assign('data',$data);
			
			$this->assign('article_c',$article_c);	
			$this->assign('count',$count);
			$this->gonggong();	
			$this->display();
		}
	   public function fenlei($article_s,$ppid,$lev=0){

            static $list=array();
            foreach ($article_s as $key => $value) {
            	  if($value['p_id']==$ppid){
            	  	   $value['lev']=$lev;
            	  	   $list[]=$value;
            	  	   $this->fenlei($article_s,$value['ac_id'],$lev+1);
            	  }

            }
            return $list;


	   }

}