<?php 
function redirect_to($indexpage){
	header("Location: ". $indexpage);
	exit;
}
redirect_to("index.php");


?>