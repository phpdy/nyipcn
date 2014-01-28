<a href="#" onclick="box()">登陆框</a>

<script type="text/javascript">

function box(){
	//alert(123) ;
	url = "/login.php?action=box" ;
	window.showModalDialog(url,"","dialogHeight=400px;dialogWidth=520px;center=yes;help=no;resizable=no;scroll=no;status=no;edge:raised") ;
	
}
</script>