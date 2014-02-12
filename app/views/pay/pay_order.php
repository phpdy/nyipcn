<?php
include './comm/title.php';
?>
<script language="javascript" type="text/javascript" src="js/common.js" ></script>

<div class="navbg" style="display: block;">
  <div class="navlist"><a href="http://www.newshootedu.com/">首页</a>&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;我要报名&nbsp;&nbsp;<img src="/images/nav-breadcrumb.png" border="0" width="6" height="12" align=absmiddle>&nbsp;&nbsp;在线报名</div>
  <div class="navchannel">在线报名</div>
</div>

<!--main begin-->
<div class="main">
<?php
include './comm/user_left.php';
?>

	<div class="rmain">
	<div class="jpk">
    <form name="myForm" id="myForm" method="post" action="user.php?action=infoSubmit">
		<div class="apply_sub">请选择支付方式</div>
    	<div class="apply_desc"><p>欢迎您参加纽摄教育在线学院的学习，提升摄影技艺，开启自己的摄影新航程！你提交报名表之后，可以通过下列方式支付您的学习费用：</p></div>
      	<div class="apply_sheet">
        	<div><img src="./images/paycard.gif" width="408" height="252"></div>
	        <div>
	          <div style="width:470px;margin:0 auto;">
	            <div style="width:230px;padding:15px 0;text-align:center;float:left"><input type="button" class="btn-img btn-pay" id="registsubmit" value="在线支付" onclick="window.location='pay.php?action=jump&typeid=1'"></div>
	            <div style="width:230px;padding:15px 0;text-align:center;float:right"><input type="button" class="btn-img btn-pay" id="registsubmit" value="银行汇款" onclick="window.location='http://v.nyipcn.com/clist.php?cid=15&lid=30'"></div>
	          </div>
	          <div class="apply_desc"><p>&nbsp;&nbsp;&nbsp;&nbsp;我们在收到您的学习费用之后，会立即与您联系，将电子版《学习手册》及学习卡发送给您。您收到后就可以立即开始您的摄影学习旅程。</p>
	          <p>&nbsp;&nbsp;&nbsp;&nbsp;如果您在报名过程中遇到任何问题，欢迎您随时<a href="http://v.nyipcn.com/clist.php?cid=19&lid=28" target=_blank><b>联系我们</b></a>。</p></div>
	        </div>
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
