<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>列表</title>
<link rel="StyleSheet" href="manager/css/style.css" type="text/css" />
</head>
<body>
<div class="content">
    <div id="main" class="main">
        <div id="gamefeatures"><h2>信息查询</h2></div>
        
        <div id="gamemain">
        <form method="post" action="?dir=mgt&control=userinfo&action=list">
       		姓名：<input type="text" name="username" value="<?php echo @$userinfo['username'] ;?>" size="10" maxlength="10"/>
       		会员类型：<select name="memberid">
       		<option value="0" >全部
	       		<?php 
				foreach($remberlist as $item){
					$id = $item['id'] ;
					$name = $item['name'] ;
					$p="" ;
					if($id==@$userinfo['memberid']){
						$p="selected" ;
					}
					echo "<option value='$id' $p>$name" ;
				}
	       		?>
			</select>
			手机号：<input type="text" name="mobile" value="<?php echo @$userinfo['mobile'] ;?>" size="10" maxlength="10"/>
			电子邮箱：<input type="text" name="email" value="<?php echo @$userinfo['email'] ;?>" size="10" maxlength="10"/>
			<input type="hidden" name="page" value="<?php echo @$userinfo['page'] ;?>"/>
			<input type="submit" value="查询">
        </form>
        </div>
        
        <table class="GF-listTab">
            <tbody>
            <tr id="title">
                <td>ID</td>
                <td>姓名</td>
                <td>会员类型</td>
                <td>性别</td>
                <td>出生日期</td>
                <td>手机号</td>
                <td>备用电话</td>
                <td>电子邮箱</td>
                <td>省市</td>
                <td>注册日期</td>
                <td>修改</td>
            </tr>
		<?php
		$i = 0;
		$pno = empty($userinfo['page'])?0:$userinfo['page'] ;//页号
		foreach ($list as $item){
			$class = $i%2==0 ? 'trstyle1' : 'trstyle2';
			$member = $item['member'] ;
			$sex = "-" ;
			if($item['sex']==1){
				$sex = "男" ;
			} else if($item['sex']==2){
				$sex = "女" ;
			}
			$birth 	= $item['birth'] ;
			$mobile = $item['mobile'] ;
			$phone 	= $item['phone'] ;
			$email	= $item['email'] ;
			$dz		= $item['province']." ".$item['city'] ;
			$createtime = $item['createtime'] ;
			
			$no = $i+1+FinalClass::$_list_pagesize*$pno ;//序号
			echo "<tr class='$class'><td>$no</td><td><a href='?dir=mgt&control=userinfo&action=show&id=$item[id]'>$item[username]</a></td>".
			"<td>$member</td><td>$sex</td><td>$birth</td><td>$mobile</td><td>$phone</td><td>$email</td><td>$dz</td><td>$createtime</td>".
			"<td><a href='?dir=mgt&control=userinfo&action=up&id=$item[id]'>修改</a></td></tr>" ;
		$i++;
		}
		?>
		</table>
		
		<?php include 'paging.php';?>
	</div>
</div>
</body>
</html>