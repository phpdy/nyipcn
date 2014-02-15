<div class="baseDiv newWidth">
  <div id="customServiceID" style="display:none; z-index: 100; position: absolute; top: 45px; right: 1px; width: 300px; height: 350px; border: 1px solid #B2D3E6; background: #ffffff">
  </div>
  <div id="customServiceID" style="z-index: 10; position: absolute; top:5px; right:20px; width:500px; height:30px; border:0px solid #B2D3E6;text-align: right;">
  
  <?php 
  @session_start ();
  $userinfo = @$_SESSION [FinalClass::$_session_user] ;
  if(empty($userinfo)){
  	echo '<a href="login.php">[登录]</a> - <a href="reg.php">[免费注册]</a>' ;
  } else {
  	$username = $userinfo['username'] ;
  	if(empty($username)){
  		$username = $userinfo['name'] ;
  	}
  	echo '您好，'.$username.'！<a href="login.php?action=loginout">[退出]</a>' ;
  }
  ?>
  </div>
  <img style="display:block;border-bottom:1px #CDCDCD solid" src="../images/top.jpg" class="" width="1004" height="140">
</div>
<!--nav begin-->
<?php
  //$sql = "select catid,catname from v9_category order by listorder";
  $nav[0] = array("首页","http://www.newshootedu.com",0);
  $nav[1] = array("精品课程","http://www.newshootedu.com/clist.php?cid=10",10);
  $nav[2] = array("公开课","http://www.newshootedu.com/clist.php?cid=20",20);
  $nav[3] = array("我要报名","http://www.newshootedu.com/clist.php?cid=15",15);
  $nav[4] = array("常见问题","http://www.newshootedu.com/clist.php?cid=17",17);
  //$nav[5] = array("学员中心","clist.php?cid=100",0);
  $nav[6] = array("关于我们","http://www.newshootedu.com/clist.php?cid=19",19);
  //print_r ($nav);
?>
<div id="orgTab" name="orgTab" class="org_bg" style="display: block;">
<?php
$arr = $nav;
foreach ($arr as $value) {
?>
  <div class="floatleft select">
    <div class="floatleft org_tab_l_r"><img src="../images/s.gif" width="1" height="1"></div>
    <div class="floatleft org_tab_c" style="position:relative">
      <a onfocus="this.blur()" class="tab_link" href="<?=$value[1];?>"><?=$value[0];?></a>
    </div>
    <div class="floatleft org_tab_l_r"><img src="../images/s.gif" width="1" height="1"></div>
    <div class="clearboth"></div>
  </div>
<?php
}
?>
</div>
<!--nav end-->