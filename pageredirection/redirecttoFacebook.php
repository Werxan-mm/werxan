<?php 
function redirect_to($likepage){
	header("Location: ". $likepage);
	exit;
}
redirect_to("https://www.facebook.com/werxanstore");


?>