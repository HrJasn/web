<?php

	session_start();
	
	if(!empty($_SESSION["Account"])){		
		$btx = '管理介面';
	}else{
		$btx = '前往登入';
	}

?>

<!DOCTYPE html>
<html lang="zh-hans">

<head>

<meta charset="utf8">
<title>多啦A夢Line-API</title>
<meta http-equiv="Pragma" content="private" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Cache-Control" content="private, max-age=600, pre-check=600" />

<link rel=stylesheet type="text/css" href="css\line-template.css"> 

<style>

body{
background-color:#66FF88;
font-family: Microsoft JhengHei;
}

.QR{

position:fixed;
top: calc(50% - 210px);
width:100%;
height:100%;
min-width:100px;

text-align:center;
line-height:50%;

}

</style>

</head>

<body>

<div class="QR">
<a href="https://line.me/R/ti/p/%40llt8759o"><img style="width:80%;max-width:360px;" src="https://qr-official.line.me/L/AlEw7-Px4h.png"></a>
<div><input class="userbtn" type="button" value="<?php echo $btx;?>" onclick="location.href='login.php';" /></div>
</div>

</body>

</html>