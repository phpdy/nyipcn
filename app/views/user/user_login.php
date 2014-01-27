<?php
include './comm/title.php';

?>

<div class="navbg" style="display: block;">
  <div class="navlist"><a href="http://www.newshootedu.com/">首页</a>&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;用户中心&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;用户登陆</div>
<!--  <div class="navchannel">用户登陆</div>-->
</div>

<!--main begin-->
<div class="main">
	<div class="apply_main">

    <div class="apply_sub">用户登陆</div>
    <form name="myForm" onSubmit="return chkForm(this)" method="post" action="">
		<div class="apply_sheet">

        <div class="apply_t1">用&nbsp;户&nbsp;名：<input type="text" class="sele" size="20" maxlength="20" name="name" id="name"></div>
        <div class="apply_t1">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" class="sele" size="20" maxlength="20" name="password" id="password"></div>
       </div>
		<div class="apply_next">
	        <input type="hidden" name="url" value="<?php echo $_REQUEST['url'] ;?>">
	        <input type="button" name="regist" id="regist" class="btn-img btn-regist" value="注册" />&nbsp;&nbsp;
	        <input type="button" class="btn-img btn-regist" id="login" value="登陆" tabindex="5">
		</div>
    </form>
	</div>
</div>
<!--main end-->
<div style="clear:both;"></div>

<?php
  include "./comm/footer.php";
?>
<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(function(){
	$("#regist").click(function(){
		document.location.href="reg.php" ;
	});
	
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
			<?php 
			$url = $_REQUEST['url'] ;
			if(empty($url)){
				$url = FinalClass::$_home_url ;
			}
			?>
			document.location.href="<?php echo $url; ?>" ;
		});
		
	});
	
})
</script>