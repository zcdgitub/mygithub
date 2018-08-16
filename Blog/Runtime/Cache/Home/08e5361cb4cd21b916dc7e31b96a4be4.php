<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>相册 - <?php echo (C("NAME")); ?></title>
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
                    <a title="<?php echo (C("NAME")); ?>" href="/"><img src="/Public/Img/icon/logo.gif" /></a>
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
              <li class="active">匆匆那年&nbsp;|&nbsp;相册</li>
        </ol>
        <div class="row-l col-md-8">
		<ul class="album-div">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="album-li">
                <div class="image-light album-img" >
                  	<img src="/<?php echo ($v["al_img"]); ?>" alt="<?php echo ($v["al_name"]); ?>" style="width: auto;max-width: 100%;max-height: 100%;">
                </div>
                <div class="caption album-remark">
                    <h5><?php echo ($v["al_name"]); ?></h5>
                    <a href="<?php echo U('look','id='.$v['al_id']);?>" class="btn btn-primary btn-xs" role="button">查看全部</a>
                </div>
        	</li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php echo ($page); ?>
        </div>
    
    
</body>
</html>