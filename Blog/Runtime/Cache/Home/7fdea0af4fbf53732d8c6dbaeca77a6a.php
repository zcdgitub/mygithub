<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo ($albums["al_name"]); ?> - <?php echo (C("NAME")); ?></title>
	<meta name="keywords" content="<?php echo ($system["keyword"]); ?>" />
	<meta name="description" content="<?php echo ($system["remark"]); ?>" />
	<meta name="version" content="<?php echo (C("NAME")); ?> v<?php echo ($version); ?>" />
	<meta name="author" content="<?php echo ($system["author"]); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="qc:admins" content="73113635665455576375" />
<link rel="stylesheet" href="/Public/Css/bootstrap.min.css" />
<link rel="shortcut icon" href="/Public/Img/icon/favicon.ico" />
<link rel="stylesheet" href="/Public/Css/my.css" />
	</head>
    <body>
      <!--   <div class="top-top">
          <div class="container">
              <div class="col-md-5 top-left"><a class="from"><?php echo getOs();?></a></div>
              <div class="col-md-5 top-right">
                  <?php if(empty($_SESSION['nickname'])): ?><a href="<?php echo U('Common/loginqq',array("type"=>"qq"));?>" class="from" >QQ访问</a>
      					<?php else: ?>
      						<?php echo (session('nickname')); ?> <a class='from' href="<?php echo U('Common/out');?>">退出</a><?php endif; ?>
              </div>
          </div>
      </div>  -->
        <div class="container ">
            <div class="row header">
                <div class="col-md-4 logo">
                    <a title="<?php echo (C("NAME")); ?>" href="/"><img src="/Public/Img/icon/logo.png" /></a>
                    <h5 class="hidden-xs">青春因为爱情才美丽</h5>
                </div>
                <div class="nav-dh col-md-6 col-xs-12">
                    <nav class="navbar navbar-default">
                        	<div class="navbar-header">
	                          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                            <span class="sr-only">导航</span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                          	</button>
	                           	<a class="navbar-brand visible-xs" href="#">博客导航</a>
	                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           	<ul class="nav navbar-nav">
	                            <li class="<?php echo ($index); ?> dh"><a href="<?php echo U('home/index/index');?>">首页</a></li>
	                            <li class="<?php echo ($about); ?> dh"><a href="<?php echo U('Home/about/index');?>">关于我</a></li>
	                            <li class="dropdown dh <?php echo ($class); ?>">
	                              	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">分类<span class="caret"></span></a>
	                              	<ul class="dropdown-menu" role="menu">
	                                <?php if(is_array($tag)): $i = 0; $__LIST__ = $tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('class/index','id='.$vo['t_id']);?>" ><i class="icon-ok-sign"></i> <?php echo ($vo["t_name"]); ?></a></li>
	                                    <li class="divider"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                  
	                              </ul>
	                            </li>
	                            <li class="dh <?php echo ($feel); ?>"><a href="<?php echo U('Home/say/index');?>">日志说说</a></li>
	                            <li class="dh <?php echo ($album); ?>"><a href="<?php echo U('Home/album/index');?>">相册</a></li>
	                            <li class="dh <?php echo ($friends); ?>"><a href="<?php echo U('Home/friends/index');?>">邻居</a></li>
	                            <li class="dh <?php echo ($gust); ?>"><a href="<?php echo U('Home/gust/index');?>">留言板</a></li>
	                           <!--  <li class="dh <?php echo ($download); ?>"><a href="<?php echo U('Home/down/index');?>">资源下载</a></li> -->
                          	</ul>
                        </div>
                    </nav>
                </div>
            </div>
<!-- http://www.jq22.com/jquery -->
	<div class="row aerousel">
	<ol class="breadcrumb">
		  <li><a href="<?php echo U('index/index');?>">网站首页</a></li>
		  <li><a href="<?php echo U('album');?>">相册</a></li>
		  <li class="active"><?php echo ($album["al_name"]); ?></li>
	</ol>
	<div class="col-md-8 row-l">
		<div class="row album-look">
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><!--  <div class="col-xs-6 col-md-3">  -->
		  <a class="fancybox-buttons thumbnail preview" data-fancybox-group="button" href="/<?php echo ($v["p_img"]); ?>"><img src="/<?php echo ($v["p_thumb"]); ?>" alt="<?php echo ($v["p_remark"]); ?>" class="img" /></a>
		<!--  </div>  --><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="sider-box">
    <?php if(is_array($al_content)): $i = 0; $__LIST__ = $al_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media connect">
    <div class="media-left">
        <?php if(!empty($vo["ac_url"])): ?><a href="<?php echo ($vo["alc_url"]); ?>" target="_blank" rel="nofollow" title="浏览 <?php echo ($vo["alc_name"]); ?> 的网站?"><img class="media-object img-circle  img-50" src="<?php echo ($vo["alc_img"]); ?>" alt="<?php echo ($vo["alc_name"]); ?>"></a>
        <?php else: ?>
        <img src="<?php echo ($vo["alc_img"]); ?>" class="media-object img-circle img-50" alt="<?php echo ($vo["alc_name"]); ?>"/><?php endif; ?>
        </div>
        <div class="media-body">
        	<div class="fool">#<?php echo ($vo["alc_id"]); ?></div>
            <p class="media-heading"><a><span class="glyphicon glyphicon-user"></span></a>&nbsp;&nbsp;&nbsp;<?php echo ($vo["alc_name"]); ?>&nbsp;&nbsp;<a><span class="glyphicon glyphicon-time"></span></a>&nbsp;<?php echo (getTime($vo["alc_time"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;<a class="from"><?php echo ($vo["alc_from"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a><span class="glyphicon glyphicon-map-marker"></span></a>&nbsp;&nbsp;<?php echo ($vo["ip"]); ?></p>
            <div class="connect-box"> <?php echo (reFace($vo["alc_content"])); ?></div>
            <?php if(!empty($vo["alc_rtime"])): ?><hr class="content-hr" />
            <div class="media">
                <div class="media-left">
                <a><img class="media-object img-circle img-50" src="<?php echo ($system["admin_img"]); ?>" alt="<?php echo ($vo["alc_rname"]); ?>"></a>
                </div>
                <div class="media-body">
                <p class="media-heading"><a><span class="glyphicon glyphicon-king"></span></a>&nbsp;&nbsp;&nbsp;<?php echo ($vo["alc_rname"]); ?>&nbsp;&nbsp;<a><span class="glyphicon glyphicon-send"></span></a>&nbsp;<?php echo (date("m-d H:i",$vo["alc_rtime"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;回复&nbsp;<a>@<?php echo ($vo["alc_name"]); ?></a>&nbsp;中说到：</p>
                <div class="connect-box"><?php echo (reFace($vo["alc_rcontent"])); ?></div>
                </div>
            </div><?php endif; ?>
        </div>
    </div>
    <hr /><?php endforeach; endif; else: echo "" ;endif; ?>
    
    <div class="home-from">
        <div class="home-from-model"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">留下脚印</div>
        <div class="collapse" id="collapseExample">
            <div class="well">
            <div method="post" >
			<input id="alid" type="hidden" value="<?php echo ($albums["al_id"]); ?>" />
			<input id="alname" type="hidden"  value="<?php echo ($albums["al_name"]); ?>" />
			<input id="jump" type="hidden"  value="/Album/look/id/1.html" />
			<div class="input-group home-from-box">
    <span class="input-group-addon" id="basic-addon1">昵称</span>
    <input type="text" class="form-control" placeholder="昵称" aria-describedby="basic-addon1" name="g_name"  id="name">
  	<input type="hidden" name="p_id" value="0" id="pid"> 
  	<input type="hidden"  name="ac_pid"    value="<?php echo ($data["a_id"]); ?>"  id="aid" />
	<span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span>
</div>
<div class="form-group home-from-box">
    <textarea class="form-control" id="content" name="g_content" rows="3" placeholder="请输入评论内容" rows="7"></textarea>
</div> 

					
			<div class="form-group home-from-box">
			    <button class="btn btn-default btn-add-album" >提交</button>
			</div>
            </div>
            </div>
       	</div>
    </div>
    </div>
	</div>
    <script type="text/javascript" src="/Public/Js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript">
     $('.img').mouseover(function (){
            $(this).attr('src',$(this).parent().attr('href'));
     }); 
     $('.img').mouseout(function (){
           $(this).attr('src',$(this).attr('src'));
     });
    



    </script>
      <div class="col-md-4 row-r">
	<div class="sider-box sider-box2">
	    <div class="search-box">
	        <div class="input-group search-input">
	        <form action="<?php echo U('Class/search');?>" method="post" class="form-search"> 
	          	<input type="text" class="form-control" placeholder="请输入关键词" name="key">
	          	<span class="input-group-btn">
	            	<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	          	</span>
	       </form> 
	        </div>
	    </div>
	<!-- 	<h4><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;程序相关</h4>
		    <p class="siderp">站点版本：<?php echo (C("NAME")); ?>-<?php echo ($version); ?></p>
		    <p class="siderp">开源版本：<?php echo (C("NAME")); ?>-Beta v2.0</p> -->
	    <a title="Beta v2.0源码下载" href="http://loveteemo.com/down.html" class="form-control btn btn-success down"><span class="glyphicon glyphicon-save"></span>&nbsp;下载</a>
		<a targer="_blank" title="在线支付" href="<?php echo U('Home/Key');?>" class="form-control btn btn-primary down"><span class="glyphicon glyphicon-book"></span>&nbsp;在线支付</a>
		<a title="在线工具" href="<?php echo U('/tools');?>" class="form-control btn btn-warning down"><span class="glyphicon glyphicon-wrench"></span>&nbsp;在线工具</a>
		<a title="在线音乐" href="<?php echo U('/home/music/index');?>" class="form-control btn btn-danger down"><span class="glyphicon glyphicon-music"></span>&nbsp;在线音乐</a>
    </div>
	<div class="sider-box2">
	<h4><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;我的标签</h4>
	    <ul class="tag-ul">
	      	<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="label label-primary "><a href="<?php echo U('article/index','id='.$vo['a_id']);?>"><?php echo ($v["a_keyword"]); ?></a></li>
	     			<!-- <?php if($v['key'] % 6 ==1): ?><li class="label label-default"><a href="<?php echo U('/article-'.$v['a_id']);?>"><?php echo ($v["a_keyword"]); ?></a></li> --><!--<?php endif; ?> -->
	      <!-- 	<?php if($v['key'] % 6 ==2): ?><li class="label label-primary "><a href="<?php echo U('/article-'.$v['a_id']);?>"><?php echo (getTag($v["a_keyword"])); ?></a></li><?php endif; ?>
	      <?php if($v['key'] % 6 ==3): ?><li class="label label-success "><a href="<?php echo U('/article-'.$v['a_id']);?>"><?php echo (getTag($v["a_keyword"])); ?></a></li><?php endif; ?>
	      	        <?php if($v['key'] % 6 ==4): ?><li class="label label-info "><a href="<?php echo U('/article-'.$v['a_id']);?>"><?php echo (getTag($v["a_keyword"])); ?></a></li><?php endif; ?>
	      	        <?php if($v['key'] % 6 ==5): ?><li class="label label-warning "><a href="<?php echo U('/article-'.$v['a_id']);?>"><?php echo (getTag($v["a_keyword"])); ?></a></li><?php endif; ?>
	      	        <?php if($v['key'] % 6 ==0): ?><li class="label label-danger  tag-end "><a href="<?php echo U('/article-'.$v['a_id']);?>"><?php echo (getTag($v["a_keyword"])); ?></a></li><?php endif; ?> --><?php endforeach; endif; else: echo "" ;endif; ?>
	    </ul>
	</div>
	<div class="sider-box2">
	<h4><span class="glyphicon glyphicon-retweet"></span>&nbsp;&nbsp;随机文章</h4>
	    <ul class="rand-ul">
	      	<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!empty($vo["a_id"])): ?><li>
	           		<a href="<?php echo U('article/index','id='.$vo['a_id']);?>" title="<?php echo ($vo["a_title"]); ?>" class="rand-img image-light"><img src="/<?php echo ($vo["a_img"]); ?>" class="article-img" alt="<?php echo ($vo["a_title"]); ?>" title="<?php echo ($vo["a_title"]); ?>" /></a>
	           		<div class="rand-title"><a href="<?php echo U('article/index','id='.$vo['a_id']);?>"><?php echo (msubstr($vo["a_title"],0,15,'utf-8',true)); ?></a></div>
	           		<div class="rand-remark"><?php echo (msubstr(htmlspecialchars_decode($vo["a_remark"]),0,35,'utf-8',true)); ?></div>
	              </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	    </ul>
	</div>
	<div class="sider-box2">
	<h4><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;最新互动</h4>
	  	<div class="tab"  id="tab">
	        <ul class="nav nav-tabs" >
	           <li class="active"><a href="#home" data-toggle="tab">最新评论</a></li>
	           <li><a href="#content" data-toggle="tab">最新留言</a></li>
	           <li><a href="#hot" data-toggle="tab">最多点击</a></li>
	        </ul>
	  	</div>
	  	<div class="tab-content">
	     	<div class="tab-pane active" id="home">
	        <ul class="content-ul">
	      		<?php if(is_array($s_content)): $i = 0; $__LIST__ = $s_content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!empty($vo["ac_id"])): ?><li>
	        				<?php if(!empty($vo["ac_url"])): ?><a href="<?php echo ($vo["ac_url"]); ?>" target="_blank" rel="nofollow" title="访问 <?php echo ($vo["ac_name"]); ?> 的网站?">
	            				<img src="<?php echo ($vo["ac_img"]); ?>" class="img-circle img-45"/></a>
	        				<?php else: ?>
	        					<img src="<?php echo ($vo["ac_img"]); ?>" class="img-circle img-45"/><?php endif; ?>
	          				<div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($vo["ac_name"]); ?></div>
	          				<div class="content-remark">
	          					<span class="label label-success ">文章</span>&nbsp;&nbsp;<a href="<?php echo U('/article-'.$vo['ac_pid']);?>" title="<?php echo (delFace($vo["ac_content"])); ?>.." ><?php echo (msubstr(strip_tags(delFace($vo["ac_content"])),0,19,'utf-8',ture)); ?></a>
	          				</div>
	        			</li><?php endif; ?>
	        		<?php if(!empty($vo["alc_id"])): ?><li>
	        				<?php if(!empty($vo["alc_url"])): ?><a href="<?php echo ($vo["alc_url"]); ?>" target="_blank" rel="nofollow" title="访问 <?php echo ($vo["alc_name"]); ?> 的网站?">
	                    		<img src="<?php echo ($vo["alc_img"]); ?>" class="img-circle img-45"/>
	                    	<?php else: ?>
	                    		<img src="<?php echo ($vo["alc_img"]); ?>" class="img-circle img-45"/><?php endif; ?>
	        				<div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($vo["alc_name"]); ?></div>
	                  		<div class="content-remark">
	                  			<span class="label label-primary ">相册</span>&nbsp;&nbsp;<a href="<?php echo U('/album-'.$vo['alc_pid']);?>" title="<?php echo (delFace($vo["alc_content"])); ?>" ><?php echo (msubstr(strip_tags(delFace($vo["alc_content"])),0,19,'utf-8',ture)); ?></a>
	                  		</div>
	                	</li><?php endif; ?>
	        		<?php if(!empty($vo["sc_id"])): ?><li>
	        				<?php if(!empty($vo["sc_url"])): ?><a href="<?php echo ($vo["sc_url"]); ?>" target="_blank" rel="nofollow" title="浏览 <?php echo ($vo["s_c_name"]); ?> 的网站？">
	             				<img src="<?php echo ($vo["sc_img"]); ?>" class="img-circle img-45"/></a>
	             			<?php else: ?>
	             				<img src="<?php echo ($vo["sc_img"]); ?>" class="img-circle img-45"/><?php endif; ?>
	           				<div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($vo["sc_name"]); ?></div>
	          				<div class="content-remark">
	         					<span class="label label-info ">说说</span>&nbsp;&nbsp;<a href="<?php echo U('/feel-'.$vo['sc_pid']);?>" title="<?php echo (delFace($vo["sc_content"])); ?>" ><?php echo (msubstr(strip_tags(delFace($vo["sc_content"])),0,19,'utf-8',ture)); ?></a>
	          				</div>
	        			</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	      	</ul>
	     	</div>
	        <div class="tab-pane " id="content">
	        <ul class="content-ul">
	            <?php if(is_array($gusts)): $i = 0; $__LIST__ = $gusts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
	          			<?php if(!empty($v["g_url"])): ?><a href="<?php echo ($v["g_url"]); ?>" target="_blank" rel="nofollow" title="浏览 <?php echo ($v["g_name"]); ?> 的网站?">
	                		<img src="<?php echo ($v["g_img"]); ?>" class="img-circle img-45"/></a>
	                	<?php else: ?>
	                		<img src="<?php echo ($v["g_img"]); ?>" class="img-circle img-45"/><?php endif; ?>
	          			<div class="content-name"><a><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;</a><?php echo ($v["g_name"]); ?></div>
	          			<div class="content-remark">
	          				<a href="<?php echo U('/gust');?>" title="<?php echo (delFace($v["g_content"])); ?>" ><?php echo (msubstr(strip_tags(delFace($v["g_content"])),0,19,'utf-8',ture)); ?></a>
	          			</div>
	          		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	        </ul>
	        </div>
	     	<div class="tab-pane " id="hot">
	        <ul class="hot-ul">
	          	<?php if(is_array($hits)): $i = 0; $__LIST__ = $hits;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a><span class="glyphicon glyphicon-fire"></span></a>&nbsp;&nbsp;<a href="<?php echo U('/article-'.$v['a_id']);?>" ><?php echo (mb_substr($v["a_title"],0,25,'utf-8')); ?></a>(<?php echo ($v["a_hit"]); ?>)</li><?php endforeach; endif; else: echo "" ;endif; ?>
	        </ul>
	     	</div>
	  	</div>
	</div>
	<div class="sider-box2">
  	<h4 class="link"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;友情链接</h4>
	  	<ul class="link-ul">
	    	<?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "暂时没有友情链接" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($v["l_url"]); ?>" target="_blank" title="<?php echo ($v["l_name"]); ?>"><?php echo ($v["l_name"]); ?></a></li><?php endforeach; endif; else: echo "暂时没有友情链接" ;endif; ?>
	  	</ul>
	</div>
</div>
</div>
</div>

    <div class="container-footer" style="height: 200px;">
	<div class="container footer">
		<div class="row footer-all">
			<div class="col-md-3 hidden-xs">
				<h4>程序统计</h4>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-comment"></span></a>&nbsp;&nbsp;微说：&nbsp;<?php echo (chenkNum($num["say"])); ?> 条
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;文章：&nbsp;<?php echo (chenkNum($num["article"])); ?> 篇
						</span>
					</p> 
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-envelope"></span></a>&nbsp;&nbsp;评论：&nbsp;<?php echo (chenkNum($num["comment"])); ?> 条
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-send"></span></a>&nbsp;&nbsp;留言：&nbsp;<?php echo (chenkNum($num["gust"])); ?> 条
						</span>
					</p>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;建站：&nbsp;<?php echo (getDay($system["createtime"])); ?> 天
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-camera"></span></a>&nbsp;&nbsp;相册：&nbsp;<?php echo (chenkNum($num["album"])); ?> 个
						</span>
					</p>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-picture"></span></a>&nbsp;&nbsp;图片：&nbsp;<?php echo (chenkNum($num["picture"])); ?> 张
						<span class="foot-box1-r">
						<a><span class="glyphicon glyphicon-link"></span></a>&nbsp;&nbsp;链接：&nbsp;<?php echo (chenkNum($num["link"])); ?> 条
						</span>
					</p>
					<p class="foot-box1">
						<a><span class="glyphicon glyphicon-tree-conifer"></span></a>&nbsp;&nbsp;访问：&nbsp;<?php echo (chenkNum($system["hit"])); ?> 次
					</p> 
			</div>
		<!-- 	<div class="col-md-3 ">
			<h4>程序交流</h4>
				<p class="foot-box1">
					Q群：<a href="http://jq.qq.com/?_wv=1027&k=dSjBgy" target="_blank" class="foot-my"><strong>455466010</strong></a>
					<span class="foot-box1-r">
					<a><span class="glyphicon glyphicon-heart-empty"></span></a>
					&nbsp;<a href="http://koubei.baidu.com/w/loveteemo.com" target="_blank" class="foot-my">&nbsp;邀你点评</a>
					</span>
				</p>
				<p class="foot-box1">
					程序：&nbsp;<?php echo (C("NAME")); ?>
					<span class="foot-box1-r">
					版本：&nbsp;Beta <?php echo ($version); ?>
					</span>
				</p> 
				<p class="foot-box1">
					框架：&nbsp;<?php echo (C("FRAME")); ?>
					<span class="foot-box1-r">
					语言：&nbsp;<?php echo (C("LANG")); ?>
					</span>
				</p> 
				<p class="foot-box1">
					编码：&nbsp;<?php echo (C("CHARSET")); ?>
					<span class="foot-box1-r">
					作者：&nbsp;<?php echo (C("AUTHOR")); ?>
					</span>
				</p>
				<p class="foot-box1">
					源码声明：&nbsp;请参考&nbsp;&nbsp;<a href="http://www.kancloud.cn/iamhappy/blog?token=crMXYD8ksUyt" class="foot-my">使用手册</a>
				</p>
		</div> -->
			<div class="col-md-3 hidden-xs">
				<h4>推荐文章</h4>
					<?php if(is_array($f_article)): $i = 0; $__LIST__ = $f_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="foot-box3"><a><span class="glyphicon glyphicon-thumbs-up"></span></a>&nbsp;&nbsp;<a href="<?php echo U('/article-'.$vo['a_id']);?>" title="<?php echo ($vo["a_title"]); ?>" class="foot-my"><?php echo ($vo["a_title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="col-md-3 hidden-xs">
			<h4>我的相册</h4>
				<ul class="picture-ul">
					<?php if(is_array($foot_album)): $i = 0; $__LIST__ = $foot_album;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U('/album-'.$vo['al_id']);?>" target="_blank" title="<?php echo ($vo["al_name"]); ?>"><img class="img-rounded img-50" src="<?php echo ($vo["al_img"]); ?>" alt="<?php echo ($vo["al_name"]); ?>"></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<!-- <div class="row bottom">
			<div class="col-md-6 col-sm-5 bottom-left">
				<?php echo ($system["copy"]); ?>
			</div>     
			<div class="col-md-6 col-sm-7 bottom-right hidden-xs">
				<?php echo ($system["footer"]); ?>&nbsp;|&nbsp;<?php echo ($system["icp"]); ?>
			</div> 
		</div> -->
	</div>
</div>
<div id="toTop" class="hidden-xs" style="display: none;"><a href="javascript:scrollTo(0,0);" class="glyphicon glyphicon-chevron-up toTop-img" title="返回顶部"></a><!-- <a class="glyphicon glyphicon-chevron-up toTop-img" title="返回顶部"></a> --></div>
<script src="/Public/Js/jquery-1.10.1.min.js" ></script>
<script type="text/javascript">
	jQuery.browser={};(function(){jQuery.browser.msie=false; jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)./)){ jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
</script>
<script src="/Public/Js/bootstrap.min.js" ></script>
<script src="/Public/Js/common.js"></script>
<script src="/Public/Js/rl_exp.js"></script>   	
<script src="/Public/Js/jquery.fancybox.js"></script> 
<script  src="/Public/Js/jquery.qqFace.js" ></script>
</body>
</html>