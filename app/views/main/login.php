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

<div class="clearfix"></div>
<div class="newsmain">
	<div class="ml">
		<div class="holder1">
			<h2 class="title2">API入门</h2>
			<div class="mll">
				<h3>
					<a href="faq.jsp" target="_blank" class="more1">更多&gt;</a>常见问题
				</h3>
				<ul class="notice3 huia">
					<li>>>API是什么？</li>
					<li><a href="faq.jsp" target="_blank">您可以去常见问题了解API</a></li>
				</ul>
				<ul class="notice41 huia">
					<li><a href="faq.jsp?flag=problem/problem2-1.html"
						target="_blank">申请搜狗搜索推广API的流程是什么？</a></li>
					<li><a href="faq.jsp?flag=problem/problem1-1.html"
						target="_blank">搜狗搜索推广API有什么优势？</a></li>
					<!-- <li><a href="faq.jsp" target="_blank">搜狗搜索推广API的服务费用是多少？</a></li>-->
				</ul>
			</div>
			<div class="mlr">
				<h3>
					<a href="docs.jsp" target="_blank" class="more1">更多&gt;</a>开发应用
				</h3>
				<ul class="notice3 huia">
					<li>>>想开发应用？</li>
					<li><a href="docs.jsp" target="_blank">去开发文档获取您需要的资源</a></li>
				</ul>
				<ul class="notice41 huia">
					<li><a href="docs.jsp?docId=20&treeId=0"
						target="_blank">如何使用cxf构造客户端？</a></li>
					<li><a href="docs.jsp?docId=14&treeId=4"
						target="_blank">如何访问搜狗搜索推广API服务？</a></li>
					<!--<li><a href="docs.jsp" target="_blank">什么是搜狗搜索推广API的沙箱环境？</a></li>-->
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="mc">
		<div class="holder1">
			<h2 class="title2">
				<a href="docs.jsp?docId=38&treeId=0" target="_blank"
					class="more1">更多&gt;</a>下载通道
			</h2>
			<ul class="notice21 huia">
				<li><a href="/resource_file/sogou-api-java-2.1.0.zip"> <font color="red">Java
						客户端库代码下载</font></a></li>
				<li><a href="/resource_file/api_client.zip">cxf构造客户端示例工程下载</a></li>
				<li><a href="/resource_file/sogou-api-php-1.1.0.zip">php客户端示例代码下载</a>(1.0.0)</li>
				<li><a href="/resource_file/api_csharp_1.0.0.zip">C#客户端示例代码下载</a>(1.0.0)</li>
				<!-- <li><a href="resource_file/sandbox_wsdl.zip">沙箱环境WSDL文件下载</a></li>
				<li><a href="resource_file/online_wsdl.zip">正式环境WSDL文件下载</a></li> -->
				<!--<li><a href="#" target="_blank">V2 Java 客户端库</a></li>
          <li><a href="#" target="_blank">V2 PHP Client示例</a></li>-->
			</ul>
		</div>
	</div>
	<div class="mr">
		<div class="holder1">
			<h2 class="title2">
				<a href="notice.jsp" target="_blank" class="more1">更多&gt;</a>API
				公告
			</h2>
			<ul class="notice21 huia">
				<li><span class="date1">2013.09.05</span><a
					href="/notice/contents5.jsp" target="_blank"><font color="red">API升级通知</font></a></li>
				<li><span class="date1">2012.04.10</span><a
					href="/notice/contents4.jsp" target="_blank">API服务暂停通知</a></li>
				<li><span class="date1">2011.12.05</span><a
					href="/notice/contents.jsp" target="_blank">API正式环境上线通知</a></li>
				<li><span class="date1">2011.12.05</span><a
					href="/notice/contents1.jsp" target="_blank">API测试环境上线通知</a></li>
				<!--<li><span class="date1">2011.05.04</span><a href="notice.html" target="_blank">搜狗搜索推广API上线通知</a></li>
          <li><span class="date1">2011.12.05</span><a href="notice.html" target="_blank">搜狗搜索推广API上线通知</a></li>-->
			</ul>
		</div>
	</div>
</div>
<div class="clearfix"></div>


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
