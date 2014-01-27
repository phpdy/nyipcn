<?php
include './comm/title.php';
?>
<script language="javascript" type="text/javascript" src="js/common.js" ></script>

<div class="navbg" style="display: block;">
  <div class="navlist"><a href="http://www.newshootedu.com/">首页</a>&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;用户中心&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;用户信息修改</div>
  <div class="navchannel">用户信息完善</div>
</div>

<!--main begin-->
<div class="main">
<?php
include './comm/user_left.php';
?>

	<div class="rmain">
	<div class="jpk">
    <form name="myForm" id="myForm" method="post" action="user.php?action=infoSubmit">
      <div class="apply_sheet">
      	<input type="hidden" class="sele" name="id" value="<?php echo $user['id']; ?>">
        <div class="apply_t1">用户名（不可修改）：<?php echo $user['name']; ?></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>姓名（请填写真实姓名）：<input type="text" tabindex="3" class="sele" size="20" maxlength="20" name="username" value="<?php echo $user['username']; ?>"></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>性别：
	        <input type="radio" <?php if(@$user['sex']==1){echo "checked";} ?> id="1" value="1" name="sex"><label for="1">男</label>&nbsp;&nbsp;
			<input type="radio" <?php if(@$user['sex']==2){echo "checked";} ?> id="2" value="2" name="sex"><label for="2">女</label>
        </div>
        <div class="apply_t1"><b style="color:#F00;">*</b>出生日期：<input type="text" name="birth" class="sele" value="<?php echo @$user['birth']; ?>" size=20 onclick="new Calendar().show(this);" readonly></div>
        
        <div class="apply_t1"><b style="color:#F00;">*</b>证件类型:
			<select name="paper">
				<option value='1' <?php if(@$userinfo['paper']==1){echo "selected";} ?>>身份证
				<option value='2' <?php if(@$userinfo['paper']==2){echo "selected";} ?>>军官证
				<option value='3' <?php if(@$userinfo['paper']==3){echo "selected";} ?>>护照
				<option value='4' <?php if(@$userinfo['paper']==4){echo "selected";} ?>>其他
			</select></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>证件号码：<input type="text" class="sele" size="50" maxlength="18" name="paperno" id="paperno" value="<?php echo $user['paperno']; ?>"></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>所在单位：<input type="text" class="sele" size="50" maxlength="50" name="company" value="<?php echo $user['company']; ?>"></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>公司职务：<input type="text" class="sele" size="50" maxlength="50" name="job" value="<?php echo $user['job']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="apply_t1">
        	<b style="color:#F00;">*</b>所在省：<select name="province" id="s1" class="sele"><option></option></select>
	        <b style="color:#F00;">*</b>市：<select name="city" id="s2" class="sele"><option></option></select>
	        <SCRIPT language="javascript">setup()</SCRIPT></div>
	    <div class="apply_t1"><b style="color:#F00;">*</b>通讯地址：<input type="text" class="sele" size="50" maxlength="100" name="address" value="<?php echo $user['address']; ?>">
        <div class="apply_t1"><b style="color:#F00;">*</b>邮政编码：<input type="text" class="sele" size="20" maxlength="20" name="post" value="<?php echo $user['post']; ?>"></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>移动电话：<input type="text" class="sele" size="15" maxlength="15" name="mobile" value="<?php echo $user['mobile']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
        	备用电话：<input type="text" class="sele" size="15" maxlength="15" name="phone" value="<?php echo $user['phone']; ?>"></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>电子邮件：<input type="text" class="sele" size="50" maxlength="100" name="email" value="<?php echo $user['email']; ?>"></div>
      </div>
      <div class="apply_next">
        <input type="hidden" tabindex="4" name="step" value="1">
        <input type="button" class="btn-img btn-regist" id="infosubmit" value="提交修改" tabindex="5" onclick="return btn()">
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

	$("#paperno").change(function(){
		var name = $('#paperno').val() ;
		if(name.length<5) {
			alert("请录入证件号");
			$("#paperno").val("") ;
			$("#paperno").focus() ;
			return false ;
		}
		return true ;
	});
	
	$("#mobile").change(function(){
		var mobile = $('#mobile').val() ;
		var phoneNumReg = /(^0{0,1}1[0-9]{10}$)/
		if(!phoneNumReg.test(mobile)) {
			alert("请录入正确手机号");
			$("#mobile").val("") ;
			$("#mobile").focus() ;
			return false ;
		}
		return true ;
	});
	
	$("#infosubmit").click(function(){
		if(confirm('你确定要提交数据吗？')){
			if($("#username").val()!="" && $("#paperno").val()!="" && $("#mobile").val()!=""){
				//alert("ok") ;
				$("#myForm").submit();
				return true ;
			} else {
				alert("请录入完整必填信息");
			}
		}
	});
})

</script>