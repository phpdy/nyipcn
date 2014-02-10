<?php
include './comm/title.php';
?>
<script language="javascript" type="text/javascript" src="js/common.js" ></script>

<div class="navbg" style="display: block;">
  <div class="navlist"><a href="http://www.newshootedu.com/">首页</a>&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;用户中心&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;密码修改</div>
  <div class="navchannel">密码修改</div>
</div>

<!--main begin-->
<div class="main">
<?php
include './comm/user_left.php';
?>

	<div class="rmain">
	<div class="jpk">
    <form name="form" id="form" method="post" action="user.php?action=pwdSubmit">
      <div class="apply_sheet">
        <div class="apply_t1">&nbsp;&nbsp;用&nbsp;户&nbsp;名&nbsp;：<?php echo $user['name']; ?><input type="hidden" class="sele" name="id" value="<?php echo $user['id']; ?>"></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>旧&nbsp;密&nbsp;码&nbsp;：<input type="password" tabindex="3" class="sele" size="20" maxlength="20" name="oldpassword" id="oldpassword"></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>新&nbsp;密&nbsp;码&nbsp;：<input type="password" tabindex="3" class="sele" size="20" maxlength="20" name="password" id="password">（密码长度不少于6位）</div>
        <div class="apply_t1"><b style="color:#F00;">*</b>确认密码：<input type="password" tabindex="3" class="sele" size="20" maxlength="20" name="repassword" id="repassword"></div>
      </div>
      <div class="apply_next">
        <input type="hidden" tabindex="4" name="step" value="1">
        <input type="button" class="btn-img btn-regist" id="pwdsubmit" value="修改密码" tabindex="5" >
      </div>
    </form>
    </div>
	</div>
</div>
<!--main end-->
<div style="clear:both;"></div>

<?php
  include "./comm/footer.php";
?>
<script language="javascript" type="text/javascript" src="js/Calendar3.js" ></script>
<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

$(function(){
	$("#oldpassword").change(function(){
		var oldpassword = $('#oldpassword').val() ;
		if(oldpassword.length==""){
			alert("请输入旧密码。") ;
			$("#oldpassword").val("") ;
			$("#oldpassword").focus() ;
			return false ;
		}

		$.post("./user.php?action=checkpwd",{id:$('#id').val(),password:$('#oldpassword').val()},function(data){
			//alert(data) ;
			if(data==0){
				alert("旧密码错误，请重新输入。") ;
				$("#oldpassword").val("") ;
				$("#oldpassword").focus() ;
				return false ;
			}
		});
		return true ;
	});

	$("#password").change(function(){
		var pwd = $('#password').val() ;
		//alert(pwd) ;
		//alert(pwd.length) ;
		if(pwd.length<6){
			alert("密码长度不能少于6位数字或字母。") ;
			$("#password").val("") ;
			$("#password").focus() ;
			return false ;
		}
		return true ;
	});
	
	$("#repassword").change(function(){
		if($('#password').val() != $('#repassword').val()){
			alert("两次输入密码不一致，请重新输入") ;
			//$("#password").val("") ;
			$("#repassword").val("") ;
			$("#repassword").focus() ;
			return false ;
		}
		return true ;
	});

	$("#pwdsubmit").click(function(){
		if(confirm('你确定要提交数据吗？')){
			var oldpassword = $('#oldpassword').val() ;
			var repassword = $('#repassword').val() ;
			if(oldpassword=="" || repassword=="" ){
				alert("请填写完整信息") ;
				return false ;
			}

			$.post("./user.php?action=pwdSubmit",{id:$('#id').val(),password:$('#password').val()},function(data){
				//alert(data) ;
				if(data==1){
					alert("密码修改成功。") ;
				} else {
					alert("密码修改失败。") ;
					return false ;
				}
				$("#oldpassword").val("") ;
				$("#password").val("") ;
				$("#repassword").val("") ;
			});
//			alert("ok") ;
//			alert(document.form.action) ;
//			document.form.submit();
//			$("#myForm").action="reg.php?action=regSubmit";
//			$("#myForm").submit();
//			$("#form").submit();
		    return true;
		}
	});
})
</script>