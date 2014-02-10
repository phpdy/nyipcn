<?php
include './comm/title.php';

?>

<div class="navbg" style="display: block;">
  <div class="navlist"><a href="http://www.newshootedu.com/">首页</a>&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;用户注册</div>
  <div class="navchannel">用户注册</div>
</div>

<!--main begin-->
<div class="main">
	<div class="apply_main">

    <div class="apply_sub">注册信息填写</div>
    <form name="form" id="form" method="post" action="reg.php?action=regSubmit">
		<div class="apply_sheet">
        <div class="apply_t1"><b style="color:#F00;">*</b>电子邮箱：<input type="text" tabindex="3" class="sele" size="20" maxlength="20" name="name" id="name">（电子邮箱地址，用户的登录名）</div>
        <div class="apply_t1"><b style="color:#F00;">*</b>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" tabindex="3" class="sele" size="20" maxlength="20" name="password" id="password">（密码长度不少于6位）</div>
        <div class="apply_t1"><b style="color:#F00;">*</b>确认密码：<input type="password" tabindex="3" class="sele" size="20" maxlength="20" name="repassword" id="repassword"></div>
		<div class="apply_t1"><b style="color:#F00;">*</b>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：<input type="text" tabindex="3" class="sele" size="20" maxlength="20" name="username" id="username">（请填写真实姓名）</div>
		<div style="margin:0 auto;width:800px;text-align:left;padding-left:5px;"><label><font color="#B60925"><b>学员须知：</b></font></label></div>
        <div><textarea rows="12" cols="110" tabindex="1" readonly="true" style="padding:5px 5px;overflow:auto;resize:none">
欢迎报名加入纽摄教育在线学院！在您正式提交报名前，请仔细阅读本须知。
1.请按要求认真填写个人信息，填报内容必须真实准确，所填资料若与事实不符，由此造成的后果由个人承担。
2.用户在完整填写并提交报名表后，可以通过在线支付或是银行汇款的方式进行支付，您汇款之后请务必联系客服（电话：010-82755840，QQ：800002915），将您的汇款人姓名、充值金额、充值时间信息告知客服。客服核实信息后，会在1个工作日内为您办理注册手续，并为您开通学习帐户。
3.进入网校学习之前，您需要准备一台电脑，并确保您的电脑已正常接入互联网，接入方式有拨号接入、ISDN、ADSL接入或接入宽带网等。
4.当您提交报名表、缴费后会收到学校通过电子邮件发送的电子学习卡，点击首页“用户登录”图标进入用户登录页面后，在“邮箱/用户名”中输入学习卡上的“注册账号/ID”，在“密码”中输入电子邮件中给出的初始密码，点击“立即登录”即可。详情请见“如何学习”（链接地址：http://v.nyipcn.com/clist.php?cid=15&lid=17）页面。
5.所有视频课程都可以在1年的时间里反复收看30次。播放次数耗尽后，将无法再次观看。如果需要再次观看，您可以重新进行购买，所以请不要浪费视频的播放次数。（免费的视频课程不受播放次数限制）
6.视频的浏览次数是按照两个小时算一次的。举例说明：您11:00点打开了视频，系统首先会扣除您一次次数，从11:00点到13:00点之间的两个小时内，不论您是刷新课程或者是外出回来重新打开视频，系统都是按照一次计算扣除的。
7.由于在线学习课程属于特殊商品，在您报名缴费之后，无论是否观看了该课程，或者观看了该课程多少次，您的费用都不会返回。因此，请您在购买前仔细浏览课程介绍并观看样片，谢谢！
8.鉴于在为学员办理各项事务中（包括但不限于办理学籍注册、学员活动保险、预订各类服务等方面）需要学员的个人信息。纽摄教育会保存学员的部分信息，并针对每种业务建立了个人信息保护管理系统，遵守收集、使用和提供个人信息的相关制度，在法律规定的范围内使用学员信息。在处理个人信息问题上，纽摄教育将遵守适用于个人信息保护的相关法律和法规，仅在法律规定的范围内使用，同时未经学员授权不会把相关信息提供给任何第三方。点击此处阅读《纽摄教育个人信息保护政策》（链接地址：http://v.nyipcn.com/clist.php?cid=15&lid=31）。
        </textarea></div>
        <div class="apply_t1"><input id="instruction" type="checkbox" checked="checked" value=1 tabindex="2"><b style="color:#F00;">*</b>我已经阅读并接受学员须知（如果您未满18岁，需要您的父母或者监护人同意）。</div>
        </div>
		<div class="apply_next">
	        <input type="hidden" name="url" value="<?php echo $_REQUEST['url'] ;?>">
	        <input type="reset" name="chongxie" class="btn-img btn-regist" value="重新填写" />&nbsp;&nbsp;<input type="button" class="btn-img btn-regist" id="registsubmit" value="注册" tabindex="5" onclick="return btn()">
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
	$("#name").change(function(){
		var name = $('#name').val() ;
		if(name.length==""){
			alert("请输入用户名，用户名必须邮箱地址。") ;
			$("#name").val("") ;
			$("#name").focus() ;
			return false ;
		}

		var Regex = /^(?:\w+\.?)*\w+@(?:\w+\.)*\w+$/;　
		if (!Regex.test(name)) {
			alert("请输入正确的电子邮件地址！");
			$("#name").val("") ;
			$("#name").focus() ;
			return false;
		}
		
		$.post("./user.php?action=check",{name:$('#name').val()},function(data){
			//alert(data) ;
			if(data==0){
				alert("用户名已被使用，请重新输入") ;
				$("#name").val("") ;
				$("#name").focus() ;
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

	$("#username").change(function(){
		var name = $('#username').val() ;
		var chineseReg = /^[\u4E00-\u9FA5]{2,8}$/;
		if(!chineseReg.test(name)) {
			alert("请填写正确的中文姓名");
			$("#username").val("") ;
			$("#username").focus() ;
			return false ;
		}
		return true ;
	});

	$("#registsubmit").click(function(){
		if(confirm('你确定要提交数据吗？')){
			var name = $('#name').val() ;
			var repassword = $('#repassword').val() ;
			var username = $('#username').val() ;
			if(name=="" || repassword=="" || username=="" ){
				alert("请填写完整信息") ;
				return false ;
			}
			
//			alert("ok") ;
//			alert(document.form.action) ;
//			document.form.submit();
//			$("#myForm").action="reg.php?action=regSubmit";
//			$("#myForm").submit();
			$("#form").submit();
		    return true;
		}
	});
})

</script>