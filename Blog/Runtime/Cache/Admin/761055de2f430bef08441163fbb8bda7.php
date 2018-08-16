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

	

			
<div id="sidebar">
				<div id="search">
					<input type="text" placeholder="Search here..."/><button type="submit" class="tip-right" title="Search"><i class="fa fa-search"></i></button>
				</div>
				<ul>
					<li <?php echo ($index); ?>><a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-dashboard"></i> <span>首页</span></a></li>
					<li><a href="<?php echo U('Index/Index/index');?>" target="_blank"><i class="fa fa-home"></i> <span>前端首页</span></a></li>
					<li class="submenu <?php echo ($add); ?>">
						<a href="#"><i class="fa fa-flask"></i> <span>说说管理</span> <i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($say); ?>><a href="<?php echo U('Admin/Say/add');?>">发布说说</a></li>
							<li <?php echo ($saylist); ?>><a href="<?php echo U('Admin/Say/index');?>">说说列表</a></li>
						</ul>
					</li>	
					<li class="submenu <?php echo ($add); ?>">
						<a href="#"><i class="fa fa-flask"></i> <span>文章管理</span> <i class="arrow fa fa-chevron-right"></i></a>
						<ul>
						<li <?php echo ($article); ?>><a href="<?php echo U('Admin/Article/add');?>">发布文章</a></li>
						<li <?php echo ($articlelist); ?>><a href="<?php echo U('Admin/Article/index');?>">文章列表</a></li>
						</ul>
					</li>	
					
					<li class="submenu <?php echo ($content); ?>">
						<a href="#"><i class="fa fa-comment"></i> <span>互动管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($saycontent); ?>><a href="<?php echo U('Admin/Say/sayContentList');?>">说说评论</a></li>
							<li <?php echo ($articlecontent); ?>><a href="<?php echo U('Admin/Article/articleContentList');?>">文章评论</a></li>
							<li <?php echo ($gustcontent); ?>><a href="<?php echo U('Admin/Gust/index');?>">留言评论</a></li>
							<li <?php echo ($albumcontent); ?>><a href="<?php echo U('Admin/Album/albumContentList');?>">相册评论</a></li>
						</ul>
					</li>
					<?php if(($_SESSION['class']) == "1"): ?><li class="submenu <?php echo ($user); ?>">
						<a href="#"><i class="fa fa-user-md"></i> <span>用户管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($useradd); ?>><a href="<?php echo U('Admin/User/userAdd');?>">新增用户</a></li>
							<li <?php echo ($userlist); ?>><a href="<?php echo U('Admin/User/userList');?>">用户列表</a></li>
						</ul>
					</li><?php endif; ?>
					<li class="submenu <?php echo ($tag); ?>">
						<a href="#"><i class="fa fa-tags"></i> <span>栏目设置</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($tagadd); ?>><a href="<?php echo U('Admin/Tag/add');?>">添加分类</a></li>
							<li <?php echo ($taglist); ?>><a href="<?php echo U('Admin/Tag/index');?>">栏目列表</a></li>
						</ul>
					</li>
					<li class="submenu <?php echo ($link); ?>">
						<a href="#"><i class="fa fa-link"></i> <span>链接设置</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($linkadd); ?>><a href="<?php echo U('Admin/Link/index');?>">新增链接</a></li>
							<li <?php echo ($linklist); ?>><a href="<?php echo U('Admin/Link/linkList');?>">链接列表</a></li>
						</ul>
					</li>

					<li class="submenu <?php echo ($album); ?>">
						<a href="#"><i class="fa fa-folder-open"></i> <span>相册管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($albumadd); ?>><a href="<?php echo U('Admin/Album/add');?>">新增相册</a></li>
							<li <?php echo ($albumlist); ?>><a href="<?php echo U('Admin/Album/index');?>">相册列表</a></li>
						</ul>
					</li>

					<li class="submenu <?php echo ($picture); ?>">
						<a href="#"><i class="fa fa-picture-o"></i> <span>图片管理</span><i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($pictureadd); ?>><a href="<?php echo U('Admin/Picture/add');?>">新增图片</a></li>
							<li <?php echo ($picturelist); ?>><a href="<?php echo U('Admin/Picture/index');?>">图片列表</a></li>
						</ul>
					</li>
					<li class="submenu <?php echo ($add); ?>">
						<a href="#"><i class="fa fa-flask"></i> <span>版本管理</span> <i class="arrow fa fa-chevron-right"></i></a>
						<ul>
						<li <?php echo ($article); ?>><a href="<?php echo U('Admin/Version/index');?>">发布版本</a></li>
						<li <?php echo ($versionlist); ?>><a href="<?php echo U('Admin/Version/versionList');?>">版本列表</a></li>
						</ul>
					</li>
					<li class="submenu <?php echo ($system); ?>">
						<a href="#"><i class="fa fa-windows"></i> <span>系统设置</span> <i class="arrow fa fa-chevron-right"></i></a>
						<ul>
							<li <?php echo ($systembasic); ?>><a href="<?php echo U('Admin/System/index');?>">基本设置</a></li>
							<!--<li <?php echo ($systemone); ?>><a onclick="alert('单页设置开发中')">单页设置</a></li>-->
							<li <?php echo ($systememail); ?>><a href="<?php echo U('Admin/System/email');?>">邮件设置</a></li>
							<li <?php echo ($systemppt); ?>><a href="<?php echo U('Admin/System/ppt');?>">幻灯设置</a></li>
							<!--<li><a href="#" onclick="alert('高级功能开发中')">高级设置</a></li>-->
						</ul>
					</li>
				</ul>
			</div>
			
<div id="content">
	<div id="breadcrumb">
		<a href="index.html" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> 首页</a>
		<a href="#">编辑内容</a>
		<a href="#" class="current">编辑文章</a>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="widget-box">
					<div class="widget-title">
						<span class="icon">
							<i class="fa fa-flask"></i>							
						</span>		
						<h5>编辑文章</h5>			
					</div>
					<div class="widget-content nopadding">
						<form enctype="multipart/form-data"  action=""   method="post" class="form-horizontal" >
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">文章标题</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<input type="text" class="form-control input-sm" name="a_title" value="<?php echo ($data["a_title"]); ?>"/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">栏目</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<select name="tag_id">
										<option value="0">顶级分类</option>
										<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["t_id"]); ?>" <?php if(($data["tag_id"]) == $vo["t_id"]): ?>selected="selected"<?php endif; ?>><?php echo (str_repeat("-",$vo["lev"])); echo ($vo["t_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label for="" class="col-sm-3 col-md-3 col-lg-1 control-label">关键词</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-quote-left"></i></span>
										<input type='text' class="form-control input-sm" placeholder="一个关键词" name="a_keyword" value="<?php echo ($data["a_keyword"]); ?>"/>
										<span class="input-group-addon"><i class="fa fa-quote-right"></i></span>
									</div>
								</div>											
							</div>
							
							                                                   
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">文章图片</label>
								
					             
									<input type="file" name="a_img"/>
								
                            </div>
							
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">描述</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<textarea rows="3" class="form-control" name="a_remark"><?php echo ($data["a_remark"]); ?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">文章内容</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									 <script id="ueditor" name="a_content" type="text/plain" style="width: 800px;height: 500px;"><?php echo (htmlspecialchars_decode($data["a_content"])); ?></script> 
									  
								</div>
							</div>
							
							<div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">发表时间</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    	<input type="text" value="<?php echo (date('Y-m-d H:i:s',$data["a_time"])); ?>" class="form-control input-sm" name="a_time" id="time" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">显示</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
							
									<label><input type="radio" name="a_view" value="0" <?php if(($data["a_view"]) == "0"): ?>checked="checked"<?php endif; ?> /> Not show</label>
								
									<label><input type="radio" name="a_view" value="1" <?php if(($data["a_view"]) == "1"): ?>checked="checked"<?php endif; ?> /> Show</label>
									
									<label><input type="radio" name="a_view" value="2" <?php if(($data["a_view"]) == "2"): ?>checked="checked"<?php endif; ?> /> Hot</label>
							
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-1 control-label">原创</label>
								<div class="col-sm-9 col-md-9 col-lg-10">
									<label><input type="radio" name="a_original" value="1" <?php if(($data["a_original"]) == "1"): ?>checked="checked"<?php endif; ?> /> Yes</label>
									<label><input type="radio" name="a_original" value="0" <?php if(($data["a_original"]) == "0"): ?>checked="checked"<?php endif; ?> /> No</label>
								</div>
							</div>
							<div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">发表人</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    	<input type="text" value="<?php echo ($data["a_author"]); ?>"  class="form-control input-sm" name="a_author" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">点击量</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                	<div class="input-group input-group-sm">
										<span class="input-group-addon"><i class="fa fa-fire"></i></span>
                                    	<input type="text" value="<?php echo (C("HIT")); ?>" class="form-control input-sm" name="a_hit"/>
                                    </div>
                                </div>
                            </div>
							 <div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">发表自</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" value="<?php echo getOs();?>" class="form-control input-sm" id="from"  name="a_from" />
                                    </div>
                                </div>
                            </div>
 							<div class="form-group">
                                <label class="col-sm-3 col-md-3 col-lg-1 control-label">发表IP</label>
                                <div class=" col-sm-9 col-md-9 col-lg-10">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" value="<?php echo get_client_ip();?>" class="form-control input-sm" id="ip" name="a_ip" />
                                    </div>
                                </div>
                            </div>
							
							<div class="form-actions">
								 <input type="submit" class="btn btn-success btn-sm" id="addsay" value="存入数据库"> 			
								<button type="button" class="btn btn-danger btn-sm">取消</button>
							</div>
							<input type="hidden" name="a_id" value="<?php echo ($data["a_id"]); ?>">
						</form>
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
<script src="/Public/Ueditor/ueditor.config.js"></script>
<script src="/Public/Ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/Public/Ueditor/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript" src="/Public/Laydate/laydate.js"></script>
<script type="text/javascript" src="/Public/Other/Js/jquery.form.js"></script>
<script type="text/javascript" src="/Public/Layer/layer.js"></script>

<script>
var ue=UE.getEditor('ueditor');
	laydate.render({
		elem:'#time',
		type:'datetime'
	});
$('form').submit(function (){
		$(this).ajaxSubmit({
			url:"<?php echo U('edit');?>",
			type:'post',
			datatype:'json',
		
			success:function (msg){
				if(msg.status==1){
					layer.msg(msg.msg);
				location.href="<?php echo U('index');?>";
				}else{
					layer.msg(msg.msg);
				}
			}
		});
return false;
});
 

</script>
</body>
</html>