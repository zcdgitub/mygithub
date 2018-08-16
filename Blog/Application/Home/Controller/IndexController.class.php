<?php
namespace Home\Controller;
class IndexController extends CommonController{
  
    public function index(){
      //主页文章 右侧随机文章
    

      //标签
        $this->gonggong();
        $this->display();
       
        
    }
   
    





}
//文章original:看是否原创还是转载xian eq标签
//文章标题
//文章是否显示 是否推荐 eq标签
//文章图片
//文章描述？？？
//文章内容
//文章发布时间 作者 点击量 评论