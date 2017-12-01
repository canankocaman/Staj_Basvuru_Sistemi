<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="app/views/admin_panel.css">
	<title>Sisteme Giriş</title>
</head>

<body>
	<form class = "form" action="http://localhost/sub/index.php?url=admin/login_kontrol" method = "post">
		Kullanıcı Adı: <br> <input  class="kul" type="text" name="kullanici_adi" ><br>
		Şifre: <br> <input class="pass" type="password" name="sifre"><br><br>
		Lütfen İfadeyi Giriniz: <br> <input name="captcha" type="text"><br><br>
	<center><img src="app/controllers/captcha.php" align="middle" ></center>
	
		<input class="btn" type="submit" name="buton" value="Giriş" >
	</form>

</body>
</html>
