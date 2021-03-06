<?php

	session_start();
	
	if(isset($_SESSION["Account"])){		
		header('Location: admin.php');
	}

?>
<!DOCTYPE html>
<html lang="zh-hans">

<head>

<meta charset="utf8">
<title>多啦A夢Line-API 登入</title>
<meta http-equiv="Pragma" content="private" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Cache-Control" content="private, max-age=600, pre-check=600" />

<link rel=stylesheet type="text/css" href="css\line-template.css"> 
<link rel=stylesheet type="text/css" href="css\menu.css"> 

<style>

form{
	position:fixed;
	width:100%;
	top: calc(50% - 100px);
	left:0px;
	text-align:center;
	font-size:1em;
}

</style>

</head>

<body>

<div id="alert" class="alert" style="display:none;">
	<script>
		var alert = document.getElementById("alert");
		alert.style.display = "<?php echo isset($_SESSION["login_alert"])?'':'none';?>";
		alert.innerText = "<?php echo isset($_SESSION["login_alert"])?$_SESSION["login_alert"]:'';?>";	
	</script>
</div>

<div class="title">登入</div>

	<form name="form" method="post" action="connect.php">

		<input class="act" type="text" name="id" placeholder="帳號" onfocus="this.placeholder = ''" onblur="this.placeholder = '帳號'"/> <br>
		<input class="pwd" type="password" name="pw"  placeholder="密碼" onfocus="this.placeholder = ''" onblur="this.placeholder = '密碼'"/> <br>
		<input class="userbtn" type="submit" name="button" value="登入" />
		<script>document.getElementsByName("id")[0].focus();</script>

	</form>

<div class="listbtn">
	<ul class="drop-down-menu">
		<li><a href="javascript: void(0)">≡</a>
				<ul>
					<li><a href="index.php">首頁</a></li>
					<li><a href="forget_passwd.php">忘記密碼</a></li>
				</ul>
		</li>
	</ul>
</div>

</body>

</html>