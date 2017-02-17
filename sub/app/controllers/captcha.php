<?php

	$harfler = array("a", "b", "c", "d", "e", "f", "g");
	$harfrasgele = rand(0,6);
	$harfrasgele2 = rand(0,6);
	$harfrasgele3 = rand(0,6);
	$sayirasgele = rand(10,99);
	$sayirasgele2 = rand(1,9);
	$metin = $harfler[$harfrasgele].$sayirasgele.$harfler[$harfrasgele2].$sayirasgele2.$harfler[$harfrasgele3];
	
	//Session::init();
	//Session::set("login", true);
	session_start();
	$_SESSION['captcha'] = $metin;

	//Session::set("captcha", $metin);

	$resim = imagecreatetruecolor(70,30);
	$arkaplanrenk = imagecolorallocate($resim,230, 230, 255);
	$fontrenk = imagecolorallocate($resim, 0, 102, 102);

	imagefill($resim, 0, 0, $arkaplanrenk);
	imagestring($resim, 5, 5, 5, $metin, $fontrenk);

	header("Cache-Control: no-cache");
	header('content-type: image/png');

	imagepng($resim);
	imagedestroy($resim);
?>