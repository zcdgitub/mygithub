<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo (C("NAME")); ?> 后台管理系统</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/Public/Other/Css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/Other/Css/my.css" />
		<link rel="stylesheet" href="/Public/Other/Css/unicorn.css" />

	</head>
	<body data-color="grey" class="flat">
	<div id="wrapper">
			<div id="header">
				<h1><a href="<?php echo U('Admin/Index/index');?>">Admin</a></h1>
				<a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>
			</div>

			<div id="user-nav">
	            <ul class="btn-group">
	                <li class="btn" >
	                	<a title="" href="#">
	                		<i class="fa fa-user"></i>
	                		<span class="text"><?php echo (session('uname')); ?></span>
	                	</a>
	                </li>
	                <!-- <li class="btn dropdown" id="menu-messages">
	                	<a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
	                		<i class="fa fa-envelope"></i>
	                		<span class="text">信息</span>
	                		<span class="label label-danger">5</span>
	                		<b class="caret"></b>
	                	</a>
	                    <ul class="dropdown-menu messages-menu">
	                        <li>
	                        	未处理信息
	                        </li>
	                        <li class="message-item">
	                        	<a href="#">
		                            <img alt="User Icon" src="/Public/Other/Img/av1.jpg" />
		                            <div class="message-content">
		                            	<span class="message-time">
			                                3 分钟前留言
			                            </span>
		                                <span class="message-sender">
		                                    张三
		                                </span>
		                                <span class="message">
		                                   你好，请问我怎么可以获取程序源码？博客可以分享么谢谢
		                                </span>
		                            </div>
	                        	</a>
	                        </li>
	                         <li class="message-item">
	                        	<a href="#">
		                            <img alt="User Icon" src="/Public/Other/Img/av1.jpg" />
		                            <div class="message-content">
		                            	<span class="message-time">
			                                3 分钟前评论
			                            </span>
		                                <span class="message-sender">
		                                    张三
		                                </span>
		                                <span class="message">
		                                   你好，请问我怎么可以获取程序源码？博客可以分享么谢谢
		                                </span>
		                            </div>
	                        	</a>
	                        </li>
	                         <li class="message-item">
	                        	<a href="#">
		                            <img alt="User Icon" src="/Public/Other/Img/av1.jpg" />
		                            <div class="message-content">
		                            	<span class="message-time">
			                                3 分钟前留言
			                            </span>
		                                <span class="message-sender">
		                                    张三
		                                </span>
		                                <span class="message">
		                                   你好，请问我怎么可以获取程序源码？博客可以分享么谢谢
		                                </span>
		                            </div>
	                        	</a>
	                        </li>
	                    </ul>
	                </li> -->
	                <li class="btn"><a title="" href="<?php echo U('Admin/System/index');?>"><i class="fa fa-cog"></i> <span class="text">系统设置</span></a></li>
	                <li class="btn"><a title="" href="<?php echo U('Admin/Index/out');?>"><i class="fa fa-share"></i> <span class="text">退出</span></a></li>
	            </ul>
	        </div>

	

	
		
		<div id="content">
			<div id="content-header">
				<h1>图片列表</h1>
				<div class="btn-group">
					<a href="<?php echo U('Admin/Picture/index');?>" class="btn" title="新增图片"><i class="fa fa-file"></i></a>
					<a class="btn" title="相册评论"><i class="fa fa-comment"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="回到首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a>
				<a href="#">图片管理</a>
				<a href="#" class="current">图片列表</a>
			</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="fa fa-picture-o"></i>
								</span>
								<h5>图片列表</h5>
							</div>
							<div class="widget-content">
								<div class="gallery-masonry">
									<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="item">
										<a href="#" class="thumbnail">
											<img src="<?php echo ($v["p_thumb"]); ?>">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a  href="<?php echo U('/Admin/Picture/pictureEdit',array('id'=>$v['p_id']));?>" class="tip-top"><i class="fa fa-pencil"></i></a>
												<div id="img" style="display: none;"><?php echo ($v["p_id"]); ?></div>
												<a class="tip-top delP"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
								    </div><?php endforeach; endif; else: echo "" ;endif; ?> 
                                </div>
							</div>
						</div>
                        
					</div>
				</div>
		</div>
		<div class="row">
			<div id="footer" class="col-xs-12">
				2017&copy;zhangchong . Brought to you by you
			</div>
		</div>
		</div>
        <script src="/Public/Other/Js/jquery.min.js"></script>
        <script src="/Public/Other/Js/jquery-ui.custom.js"></script>
        <script src="/Public/Other/Js/bootstrap.min.js"></script>
        <script src="/Public/Other/Js/jquery.gritter.min.js"></script>
        <script src="/Public/Other/Js/jquery.nicescroll.min.js"></script>
        <script src="/Public/Other/Js/unicorn.js"></script>          
		<script src="/Public/Other/Js/my.js"></script>
		<script src="/Public/Other/Js/cropbox-min.js"></script>
		<script src="/Public/Other/Js/jquery.icheck.min.js"></script>
		<script src="/Public/Other/Js/select2.min.js"></script> 
		<script src="/Public/Other/Js/cropbox-min.js"></script> 
<script src="/Public/Other/Js/jquery.masonry.min.js"></script>

            <script>
                $(function(){
                    $('.gallery-masonry').masonry({
                      itemSelector: '.item',
                      isAnimated: true,
                      isFitWidth: true
                    });
                    $('.delP').click(function(){
                    	$(".delP").attr("disabled",true);
						var id = $(this).prev("#img").text();
                    	//console.log(id);
	            		$.ajax({
	            			type:"post",
	            			url:"/Admin/Picture/pictureDel",
	            			async:true,
	            			data:{"id":id},
	            			success:function(data){
	            				if(data.error==0){
	            					succ("完成!",data.msg,"/Admin/Picture/pictureList.html");
	            				}else{
	            					err("错误!",data.msg);
	            					$(".delP").removeAttr('disabled');
	            				}
	            			},
	            		});
                    });
                });
            </script>
	</body>
</html>