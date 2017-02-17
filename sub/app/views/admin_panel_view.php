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
<!--	<form action="dogrula.php" method="post">
			<table border="1" cellpadding="2" cellspacing="2">
				<tr>
					<td>Lütfen Gördüğünüz İfadeyi Giriniz</td>
					<td><input name="captcha" type="text"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><img src="captcha.php"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input name="submit" type="submit" value="Kontrol Et"></td>
				</tr>
			</table>
		</form>-->
</body>
</html>

<!-- <div class="sayfa">
 <div class="kullanici">	
		Kullanıcı Adı:<br>
		<input type="text"></input>
		<br></br>
	</div>

	<div class="sifre">
		Şifre:<br>     
		<input type="password"></input>
		<br></br>
	</div>
	<button type="submit" class="btn"><space> Giriş  </button>
</div> 
-->