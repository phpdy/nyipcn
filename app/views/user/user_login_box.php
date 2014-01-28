<!DOCTYPE html>
<!-- saved from url=(0029)http://www.nyipcn.com -->
<html class=" ext-strict">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<title>登陆框</title>

<style>
.apply_main { margin:0 auto; width:500px; background:#f5f5f5; height:auto; border:1px solid #ccc; float:left; }
.apply_sub { margin:0 auto; padding:5px 0 0 10px; margin-bottom:15px; width:490px; background:#C7E2EB; height:40px; float:left; color:#B60925; font:800 14px/36px arial; }
.apply_sheet { margin-left: auto; margin-right: auto; width:500px; font-size:14px; height:auto; text-align:center}
.apply_t1 { margin-left: auto; margin-right: auto; width:500px; font-size:14px; line-height:50px; text-align:center;padding:15px 0 0 10px;}
.apply_next { padding:0 auto; margin-top:20px; height:50px; background:#e1e1e1; text-align:center}
.btn-img {line-height:36px; border:0; margin:8px 0; cursor:pointer;}
.btn-regist {width:180px; height:36px; color:#FFF; font-size:14px;font-weight:800;background:url(http://v.nyipcn.com/images/btn.gif) no-repeat ;}
.sele{padding:5px 5px; border:1px solid;border-color:#aaa #ddd #ddd #aaa; margin-right:10px;font-size:12px}
</style>
</head>
<body onblur="self.focus()">
<!--main begin-->
<div class="apply_main">

    <div class="apply_sub">用户登陆</div>
    <form name="myForm" onSubmit="return chkForm(this)" method="post" action="">
		<div class="apply_sheet">

        <div class="apply_t1">用&nbsp;户&nbsp;名：<input type="text" class="sele" size="40" maxlength="30" name="name" id="name"></div>
        <div class="apply_t1">密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" class="sele" size="40" maxlength="30" name="password" id="password"></div>
       </div>
		<div class="apply_next">
	        <input type="button" class="btn-img btn-regist" id="login" value="登陆">
		</div>
    </form>
</div>
<!--main end-->
</body>
<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(function(){
	
	$("#login").click(function(){
		var name = $('#name').val() ;
		var password = $('#password').val() ;
		if(name.length==0 || password.length==0){
			alert("请输入用户名和密码") ;
			return false ;
		}

		$.post("./login.php?action=loginSubmit",{name:name,password:password},function(data){
			//alert(data) ;
			if(data==false){
				alert("登陆失败，请检查用户名和密码是否正确。") ;
				return false ;
			}
			alert("登陆成功。") ;
			window.opener=null;
			window.open('','_self');
			window.close();
		});
		
	});
	
})
</script>