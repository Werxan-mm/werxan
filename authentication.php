<!DOCTYPE html>
<html>
<head>
	<title>User Authentication</title>
</head>
<body>
<pre>
<?php


if($_POST["uname"]==="root"&&$_POST["psw"]==="zar21559"){
	function redirect_to($adminAuth){
	header("Location: ". $adminAuth);
	exit;
}
redirect_to("/ip%20project/admin.php");
}

 ?>
</pre>
</body>
</html>