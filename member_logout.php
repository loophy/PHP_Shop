<?php

$_SESSION=array();
if (isset($_COOKIE[session_name()])==true)
{
	setcookie(session_name(), '', time()-42000, '/');
}
@session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ろくまる農園</title>
</head>
<body>

	ログアウトしました。<br />
	<br />
	<a href="../staff_login/shop_list.html">商品一覧へ</a>

</body>
</html>