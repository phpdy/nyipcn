<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>用户登录</title>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="wrapper">
<?php include 'common/title.php';?>
	
<div class="sidebar2">
	<div class="user_login">
		<h2>
			<img src="images/user_login1.jpg">
		</h2>

		<ul>
			<FORM id="form1" name="loginForm" action="loginaction!login.action"
				method="post">
				<li><span class="log_use2">用户名&nbsp;:&nbsp;</span><span
					class="input"> <input id="username" class="input1"
						name="userName" type="text">
				</span></li>
				<li><span class="log_use2">密&nbsp;&nbsp;&nbsp;码&nbsp;:&nbsp;</span><span
					class="input"> <input id="password" class="input1"
						name="password" type="password">
				</span></li>
				<li><span class="log_use2">验证码&nbsp;:&nbsp;</span><span
					class="input"> <input id="randcode" class="input2"
						name="randcode" type="text"></span><span>&nbsp;<a
						onClick="fresh()" href="javascript:void(0)"><img
							src="authImg" id="img_validation_code"></a>
				</span></li>
				<li style="height: auto"><span><FONT color="red"></FONT></span></li>
		</ul>
		<div class="uline"></div>
		<div class="ubutton">
			<a class="button" onClick="TiJiao()" href="javascript:void(0)">登&nbsp;&nbsp;录</a>
		</div>
		</FORM>
	</div>
</div>

<?php include 'common/footer.php';?>
</div>
</body>
</html>
<script language="javascript">
	function go() {
		if (document.getElementById("LanguageMenu").style.display == "none") {
			document.getElementById("LanguageMenu").style.display = "block";
		} else {
			document.getElementById("LanguageMenu").style.display = "none";
		}
	}
	function TiJiao() {
		if (document.getElementById("username").value == "") {
			alert("请输入用户名！");
			return false;
		}
		if (document.getElementById("password").value == "") {
			alert("请输入密码！");
			return false;
		}
		if (document.getElementById("randcode").value == "") {
			alert("请输入验证码");
			return false;
		}
		document.loginForm.submit();
	}
	function fresh() {
		var img = document.getElementById("img_validation_code");
		img.src = "authImg?" + Math.random();
	}
</script>
