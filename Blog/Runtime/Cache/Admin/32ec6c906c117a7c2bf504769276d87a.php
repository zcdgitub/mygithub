<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>后台登录</title>
  <!--   <script type="text/javascript" src="/Public/Other/Js/jquery.min.js"></script> -->
  <script type="text/javascript" src="/Public/Other/Js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/Public/Other/Js/jquery.form.js"></script>
  <!--   <script src="/Public/Other/Js/jquery.gritter.min.js"></script> -->
  <script type="text/javascript" src="__layer__/layer.js"></script>
   <!--  <script src="/Public/Other/Js/my.js"></script> -->
    <!-- <link rel="stylesheet" href="/Public/Other/Css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Other/Css/my.css"/> -->
</head>
<body>
	
   <p>
       
       <input class="ipt" type="text" placeholder="请输入用户名" id="user" name="username">
   </p>
   <p >
       <input id="password" class="ipt" type="password"  placeholder="请输入密码" name="password">
   </p>
  
   
     <p>
       <input type="submit" value="登陆" class="login_btn" />
        </p>
   


</body>
</html>
 <script type="text/javascript">
$('form').submit(function (){
    $(this).ajaxSubmit({
        url:"<?php echo U('login');?>",
        dataType:'json',
        type:'post',
        success:function(msg){
            if(msg.status==1){
              alert('ok');
                /*$this->success('Admin/Index');*/
                location.href='/admin/index';
            }else{
                layer.msg(msg.msg);
            }
        }


  });


    });






</script>