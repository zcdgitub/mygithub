<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	<title><?php echo (C("NAME")); ?> - 在线音乐</title>
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
			<!--中部-->
			<div class="row aerousel">
				<ol class="breadcrumb">
					  <li><a href="<?php echo U('index/index');?>">网站首页</a></li>
					  <li class="active">开发工具&nbsp;|&nbsp;在线音乐</li>
				</ol>
				<div class="col-md-12">
在线音乐(网易云)
					<p><span class="label label-danger">小提示</span>：建议电脑或者平板打开听歌，不推荐手机打开。</p>
					<hr/>
				<div class="radiobg">
<span class="visible-xs">请用电脑访问查看播放器，谢谢。</span>
<div class="radiodt hidden-xs">
<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=750 height=450 src="//music.163.com/outchain/player?type=0&id=2188391559&auto=1&height=430"></iframe>
<!-- <iframe src="http://douban.fm/partner/baidu" class="rstyle" border="0" frameborder="no"></iframe>
 --></div>
</div>

			</div>
		</div>
		</div>
		<div class="container-footer">
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
			<div class="col-md-3 ">
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
			</div>
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
		<div class="row bottom">
			<div class="col-md-6 col-sm-5 bottom-left">
				<?php echo ($system["copy"]); ?>
			</div>     
			<div class="col-md-6 col-sm-7 bottom-right hidden-xs">
				<?php echo ($system["footer"]); ?>&nbsp;|&nbsp;<?php echo ($system["icp"]); ?>
			</div> 
		</div>
	</div>
</div>
<div id="toTop" class="hidden-xs" style="display: none;"><a href="javascript:scrollTo(0,0);" class="glyphicon glyphicon-chevron-up toTop-img" title="返回顶部"></a><!-- <a class="glyphicon glyphicon-chevron-up toTop-img" title="返回顶部"></a> --></div>
<script src="/Public/Js/jquery-1.10.1.min.js" ></script>

<script src="/Public/Js/bootstrap.min.js" ></script>
<script src="/Public/Js/common.js"></script>
<script src="/Public/Js/rl_exp.js"></script>   	
<script src="/Public/Js/jquery.fancybox.js"></script> 
	</body>
</html>