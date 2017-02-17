<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="app/views/ogrenci_view.css">
	<title>Öğrenci Sayfası</title>
	<h3 align="center">
<?php Session::init(); ?>
Hoşgeldiniz <?php //echo $_SESSION["ad"]; echo " "; echo $_SESSION["soyad"]; ?></h3>
</head>

<body>
<div class="listem">
	<ul>
	<li><a href=" http://localhost/sub/index.php?url=ogrenci/profil">Profil</a> </li>
	<li><a href=" http://localhost/sub/index.php?url=ogrenci/staj_basvuru">Staj Başvurusu</a> </li>
	<li><a href="http://localhost/sub/index.php?url=ogrenci/staj_surec">Staj Süreç Takibi</a> </li>
	<li><a href="http://localhost/sub/index.php?url=ogrenci/staj_sonuc">Staj Sonuçları</a> </li>
	<li><a href="http://localhost/sub/index.php?url=ogrenci/staj_defter">Staj Defteri</a> </li>
	<li><a href="http://localhost/sub/index.php">Çıkış</a></li>
	</ul>
	
</div>

</body>
</html>