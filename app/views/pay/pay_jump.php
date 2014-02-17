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
		<div class="apply_sheet">
			<div style="text-align:center;padding-left:30px;"><font color=#0066ff>在线支付<a href="#" id="ahref" target="_blank"><span id="jump">跳转</span></a>...</font></div>
		</div>
    </form>
    </div>
	</div>
</div>
<!--main end-->
<div style="clear:both;"></div>

<?php
  include "./comm/footer.php";
  print_r($_SERVER['SERVER_NAME']) ;
?>
<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript">
	var url = "alipay/alipayapi.php?orderid=<?=$orderid?>" ;
	$("#ahref").attr('href',url) ;
	$("#ahref").click();
	
</script>