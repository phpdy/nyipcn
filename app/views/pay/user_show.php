<?php
include './comm/title.php';
?>
<!--main begin-->
<div class="main">
  <div class="apply_main">
<?php
if ($step=="0") {//第1步-填写报名表
?>
    <div class="apply_desc"><p>请填写下面的表格，并提交给学校，在收到您的报名表和培训费以后，我们的工作人员会立即与您联系，确认您的报名。并在一个工作日内为您提供电子版的《学习手册》和学习卡，收到后您就可以开始学习了！</p>
<p>我们非常理解您迫切学习摄影的心情，因此我们尽可能地简化了报名手续，以便您能尽快开始学习。</p>
<p>实际上，您只要3个步骤就可以加入纽摄教育在线学院的大家庭，开始自己的学习之旅。</p></div>
    <div class="apply_sub">1.填写报名表（根据中国相关法律规定，您的个人信息将被严格保密。）</div>
    <form name="myForm" onSubmit="return chkForm(this)" method="post" action="">
      <div class="apply_sheet">
        <div style="margin:0 auto;width:800px;text-align:left;padding-left:5px;"><label><font color="#B60925"><b>学员须知：</b></font></label></div>
        <div><textarea rows="12" cols="110" tabindex="1" readonly="true" style="padding:5px 5px;overflow:auto;resize:none"><?=$instruction;?></textarea></div>
        <div class="apply_t1"><input id="instruction" type="checkbox" checked="checked" value=1 tabindex="2"><b style="color:#F00;">*</b>我已经阅读并接受学员须知（如果您未满18岁，需要您的父母或者监护人同意）。</div>
        <div class="apply_t1"><font color="#B60925"><b>请认真填写报名表：</b></font></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>姓名（请填写真实姓名）：<input type="text" tabindex="3" class="sele" size="20" maxlength="20" name="realname" value=""></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>性别：<input type="radio" name="sex" value="1"><label>男</label>&nbsp;&nbsp;<input type="radio" name="sex" value="2"><label>女</label></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>出生日期：<select id="st_01" name="year" class="sele"></select><label>年</label><select id="st_02" name="month" class="sele"></select><label>月</label><select id="st_03" name="day" class="sele"></select><label>日</label>
        </div>
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
<?php
} else if ($step=="1") {//第2步-确认报名表
  switch($sex) {
    case 1:
      $sexstr = "男";
      break;
    case 2:
      $sexstr = "女";
      break;
  }
?>
    <div class="apply_sub">2.请确认报名表内容</div>
    <form name="myForm" onSubmit="return chkForm(this)" method="post" action="">
      <div class="apply_sheet">
        <div class="apply_t1"><b style="color:#F00;">*</b>姓名（请填写真实姓名）：<?=$realname;?></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>性别：<?=$sexstr;?></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>出生日期：<label><?=$year;?>年</label><label><?=$month;?>月</label><label><?=$day;?>日</label>
        </div>
        <div class="apply_t1"><b style="color:#F00;">*</b>身份证号码：<?=$idcard;?></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>通讯地址：<?=$address;?>&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#F00;">*</b>省：<?=$province;?>&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#F00;">*</b>市：<?=$city;?></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>邮政编码：<?=$zipcode;?></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>移动电话：<?=$mobile;?>&nbsp;&nbsp;&nbsp;&nbsp;备用电话：<?=$phone;?></div>
        <div class="apply_t1"><b style="color:#F00;">*</b>电子邮件：<?=$email;?></div>
      </div>
      <div class="apply_next">
        <input type="hidden" tabindex="4" name="step" value="2">
        <input type="hidden" name="realname" value="<?=$realname;?>">
        <input type="hidden" name="sex" value="<?=$sex;?>">
        <input type="hidden" name="year" value="<?=$year;?>">
        <input type="hidden" name="month" value="<?=$month;?>">
        <input type="hidden" name="day" value="<?=$day;?>">
        <input type="hidden" name="idcard" value="<?=$idcard;?>">
        <input type="hidden" name="address" value="<?=$address;?>">
        <input type="hidden" name="province" value="<?=$province;?>">
        <input type="hidden" name="city" value="<?=$city;?>">
        <input type="hidden" name="zipcode" value="<?=$zipcode;?>">
        <input type="hidden" name="mobile" value="<?=$mobile;?>">
        <input type="hidden" name="phone" value="<?=$phone;?>">
        <input type="hidden" name="email" value="<?=$email;?>">
        <input type="button" class="btn-img btn-regist" id="registedit" value="< 编辑" tabindex="5" onClick="javascript :history.back(-1);">&nbsp;&nbsp;<input type="button" class="btn-img btn-regist" id="registsubmit" value="下一步 >" tabindex="5" onclick="return checkbtn()">
      </div>
    </form>
<?
} else if ($step=="2") {
    $orderid = getuuid();
    $birthday = $year."-".$month."-".$day;
    $datetime = time();
    $sql = "insert into v9_form_apply (orderid,username,name,sex,birthday,idcard,address,province,city,zipcode,mobile,phone,email,datetime) values ('$orderid','$realname','$realname','$sex','$birthday','$idcard','$address','$province','$city','$zipcode','$mobile','$phone','$email','$datetime')";
    //echo $sql;
    $result = mysql_query($sql) or die(mysql_error());
?>
    <div class="apply_sub">3.请选择支付方式</div>
    <div class="apply_desc"><p>欢迎您参加纽摄教育在线学院的学习，提升摄影技艺，开启自己的摄影新航程！你提交报名表之后，可以通过下列方式支付您的学习费用：</p></div>
    <form name="myForm" onSubmit="return chkForm(this)" method="post" action="">
      <div class="apply_sheet">
        <div class="apply_l"><img src="./images/paycard.gif" width="408" height="252"></div>
        <div class="apply_r">
          <div style="width:470px;margin:0 auto;">
            <div style="width:230px;padding:15px 0;text-align:center;float:left"><input type="button" class="btn-img btn-pay" id="registsubmit" value="在线支付" onclick="window.location='apply.php?step=3&orderid=<?=$orderid?>&realname=<?=urlencode($realname);?>&sex=<?=$sex;?>&birthday=<?=$birthday;?>&idcard=<?=$idcard;?>&address=<?=urlencode($address);?>&province=<?=urlencode($province);?>&city=<?=urlencode($city);?>&zipcode=<?=$zipcode;?>&mobile=<?=$mobile;?>&phone=<?=$phone;?>&email=<?=urlencode($email);?>&orderid=<?=$orderid;?>'"></div>
            <div style="width:230px;padding:15px 0;text-align:center;float:right"><input type="button" class="btn-img btn-pay" id="registsubmit" value="银行汇款" onclick="window.location='http://v.nyipcn.com/clist.php?cid=15&lid=30'"></div>
          </div>
          <div class="apply_desc"><p>&nbsp;&nbsp;&nbsp;&nbsp;我们在收到您的学习费用之后，会立即与您联系，将电子版《学习手册》及学习卡发送给您。您收到后就可以立即开始您的摄影学习旅程。</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;如果您在报名过程中遇到任何问题，欢迎您随时<a href="http://v.nyipcn.com/clist.php?cid=19&lid=28" target=_blank><b>联系我们</b></a>。</p></div>
        </div>
      </div>
    </form>
<?php
} else if ($step=="3") {
?>
<form name=loading>
<div class="apply_sheet">
<div style="text-align:center;padding-left:30px;"><font color=#0066ff>在线支付跳转...</font>
<INPUT style="padding:30px 0; font-weight:bolder; color:#0066ff; background:#f5f5f5; border-style:none"
size=46 name=chart><INPUT style="background:#f5f5f5; border:medium none; color:#0066ff;" name=percent>
</div>
</div>
<script language="javascript">
var bar=0
var line="||"
var amount="||"
count()
function count(){
    bar=bar+2
    amount =amount + line
    document.loading.chart.value=amount
    document.loading.percent.value=bar+"%"
    if (bar<99){
        setTimeout("count()",10);
    }else{
        window.location = "alipay/alipayapi.php?orderid=<?=$orderid?>&receive_name=<?=urlencode($realname);?>&sex=<?=$sex;?>&birthday=<?=$birthday;?>&idcard=<?=$idcard;?>&receive_address=<?=urlencode($address);?>&province=<?=$province;?>&city=<?=$city;?>&receive_zip=<?=$zipcode;?>&receive_mobile=<?=$mobile;?>&receive_phone=<?=$phone;?>&email=<?=$email;?>";
    }
}
</script>
</P>
</form>
<?php
}
?>
  </div>
</div>
<!--main end-->
<div style="clear:both;"></div>

<?php
  include "./include/footer.php";
?>
