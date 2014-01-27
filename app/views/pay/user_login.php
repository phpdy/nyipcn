<?php
include './comm/title.php';
/*学员须知内容*/
$instruction = "欢迎报名加入纽摄教育在线学院！在您正式提交报名前，请仔细阅读本须知。

1.请按要求认真填写个人信息，填报内容必须真实准确，所填资料若与事实不符，由此造成的后果由个人承担。
2.用户在完整填写并提交报名表后，可以通过在线支付或是银行汇款的方式进行支付，您汇款之后请务必联系客服（电话：010-82755840，QQ：800002915），将您的汇款人姓名、充值金额、充值时间信息告知客服。客服核实信息后，会在1个工作日内为您办理注册手续，并为您开通学习帐户。
3.进入网校学习之前，您需要准备一台电脑，并确保您的电脑已正常接入互联网，接入方式有拨号接入、ISDN、ADSL接入或接入宽带网等。
4.当您提交报名表、缴费后会收到学校通过电子邮件发送的电子学习卡，点击首页“用户登录”图标进入用户登录页面后，在“邮箱/用户名”中输入学习卡上的“注册账号/ID”，在“密码”中输入电子邮件中给出的初始密码，点击“立即登录”即可。详情请见“如何学习”（链接地址：http://v.nyipcn.com/clist.php?cid=15&lid=17）页面。
5.所有视频课程都可以在1年的时间里反复收看30次。播放次数耗尽后，将无法再次观看。如果需要再次观看，您可以重新进行购买，所以请不要浪费视频的播放次数。（免费的视频课程不受播放次数限制）
6.视频的浏览次数是按照两个小时算一次的。举例说明：您11:00点打开了视频，系统首先会扣除您一次次数，从11:00点到13:00点之间的两个小时内，不论您是刷新课程或者是外出回来重新打开视频，系统都是按照一次计算扣除的。
7.由于在线学习课程属于特殊商品，在您报名缴费之后，无论是否观看了该课程，或者观看了该课程多少次，您的费用都不会返回。因此，请您在购买前仔细浏览课程介绍并观看样片，谢谢！
8.鉴于在为学员办理各项事务中（包括但不限于办理学籍注册、学员活动保险、预订各类服务等方面）需要学员的个人信息。纽摄教育会保存学员的部分信息，并针对每种业务建立了个人信息保护管理系统，遵守收集、使用和提供个人信息的相关制度，在法律规定的范围内使用学员信息。在处理个人信息问题上，纽摄教育将遵守适用于个人信息保护的相关法律和法规，仅在法律规定的范围内使用，同时未经学员授权不会把相关信息提供给任何第三方。点击此处阅读《纽摄教育个人信息保护政策》（链接地址：http://v.nyipcn.com/clist.php?cid=15&lid=31）。";

?>
<!--main begin-->
<div class="main">
	<div class="apply_main">
    <div class="apply_desc">
    <p>请填写下面的表格，并提交给学校，在收到您的报名表和培训费以后，我们的工作人员会立即与您联系，确认您的报名。并在一个工作日内为您提供电子版的《学习手册》和学习卡，收到后您就可以开始学习了！</p>
	<p>我们非常理解您迫切学习摄影的心情，因此我们尽可能地简化了报名手续，以便您能尽快开始学习。</p>
	<p>实际上，您只要3个步骤就可以加入纽摄教育在线学院的大家庭，开始自己的学习之旅。</p>
	</div>
    <div class="apply_sub">1.填写报名表（根据中国相关法律规定，您的个人信息将被严格保密。）</div>
    <form name="myForm" onSubmit="return chkForm(this)" method="post" action="">
		<div class="apply_sheet">
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
        <div class="apply_t1"><font color="#B60925"><b>请认真填写报名表：</b></font></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>姓名（请填写真实姓名）：<input type="text" tabindex="3" class="sele" size="20" maxlength="20" name="realname" value=""></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>性别：<input type="radio" name="sex" value="1"><label>男</label>&nbsp;&nbsp;<input type="radio" name="sex" value="2"><label>女</label></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>出生日期：<select id="st_01" name="year" class="sele"></select><label>年</label><select id="st_02" name="month" class="sele"></select><label>月</label><select id="st_03" name="day" class="sele"></select><label>日</label></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>身份证号码：<input type="text" class="sele" size="19" maxlength="18" name="idcard" value=""></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>通讯地址：<input type="text" class="sele" size="50" maxlength="100" name="address" value="">&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#F00;">*</b>省：<select name="province" id="s1" class="sele"><option></option></select><b style="color:#F00;">*</b>市：<select name="city" id="s2" class="sele"><option></option></select>
          <SCRIPT language="javascript">setup()</SCRIPT></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>邮政编码：<input type="text" class="sele" size="20" maxlength="20" name="zipcode" value=""></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>移动电话：<input type="text" class="sele" size="15" maxlength="15" name="mobile" value="">&nbsp;&nbsp;&nbsp;&nbsp;备用电话：<input type="text" class="sele" size="15" maxlength="15" name="phone" value=""></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>电子邮件：<input type="text" class="sele" size="50" maxlength="100" name="email" value=""></div>
		</div>
		<div class="apply_next">
	        <input type="hidden" tabindex="4" name="step" value="1">
	        <input type="reset" name="chongxie" class="btn-img btn-regist" value="< 重新填写" />&nbsp;&nbsp;<input type="button" class="btn-img btn-regist" id="registsubmit" value="下一步 >" tabindex="5" onclick="return btn()">
		</div>
    </form>
	</div>
</div>
<!--main end-->
<div style="clear:both;"></div>

<?php
  include "./comm/footer.php";
?>
