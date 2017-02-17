<!DOCTYPE html>
<html>
<head>
	<title>staj basvuru</title>
	
	<style type="text/css">
	.table1, th, td {
    border: 1px;
    border-style: none;
    background-color:  #e6eeff;
}

td {
  width: 250px;
  padding-left: 10px;
}
</style>
</head>
<body >
<center>
<form class = "staj_basvuru_form" action="http://localhost/sub/index.php?url=ogrenci/staj_basvuru" method = "post">
<h3>Staj Basvuru Formu</h3>
<table class='table1'>
<b>Öğrenci Bilgileri</b><br>
	    <tr>
			<th>Ad: </th>
			<td> <?php echo $_SESSION["ad"] ?></td>
		</tr>
		<tr>
			<th>Soyad: </th>
			<td><?php echo $_SESSION["soyad"] ?></td>
		</tr>
		<tr>
			<th>Öğrenci No: </th>
			<td><?php echo $_SESSION["ogr_no"] ?></td>
		</tr>
		<tr>
			<th>E-Mail: </th>
			<td><?php echo $_SESSION["eposta"] ?></td>
		</tr>
		<tr>
			<th>İkametgah: </th>
			<td><?php echo $_SESSION["ikametgah"] ?></td>
		</tr>
	    <tr>
</table>
<table class="table2"><br>
<b>Kimlik Bilgileri</b><br>
			<th>Tc Kimlik No: </th>
			<td> <input type="text" name="tc"></td>
		</tr>
		<tr>
			<th>Seri No: </th>
			<td><input type="text" name="seri_no"></td>
		</tr>
		<tr>
			<th>Ana adı: </th>
			<td><input type="text" name="ana_adi"></td>
		</tr>
		<tr>
			<th>Baba adı: </th>
			<td><input type="text" name="baba_adi"></td>
		</tr>
		<tr>
			<th>Doğum yeri: </th>
			<td><input type="text" name="dogum_yeri"></td>
		</tr>
		<tr>
			<th>Doğum tarihi: </th>
			<td><input type="text" name="dogum_tarihi"></td>
		</tr>
		<tr>
			<th>Nüfusa Kayıtlı olduğu il: </th>
			<td><input type="text" name="kayitli_il"></td>
		</tr>
		
	</table>
<table class="table3">
		<tr>
			<th>İlçe: </th>
			<td><input type="text" name="kayitli_ilçe"></td>
		</tr>
		<tr>
			<th>Mahalle/Köy: </th>
			<td><input type="text" name="mahalle_köy"></td>
		</tr>
		<tr>
			<th>Cilt No: </th>
			<td><input type="text" name="cilt_no"></td>
		</tr>
		<tr>
			<th>Sıra No: </th>
			<td><input type="text" name="sira_no"></td>
		</tr>
		<tr>
			<th>Verildiği Nüfus Dairesi</th>
			<td><input type="" name="verildigi_nüfus_dairesi"></td>
		</tr>
		<tr>
			<th>Verildiği Tarih: </th>
			<td><input type="text" name="verildigi_tarih"></td>
		</tr>
		<tr>
			<th>Veriliş Nedeni: </th>
			<td><input type="text" name="verilis_nedeni"></td>
		</tr>
</table>
<table class="table4"><br>
<b>Staj Yapılacak Yer Bilgileri</b><br>
			<th>Kurum adı: </th>
			<td> <input type="text" name="kurum_ad"></td>
		</tr>
		<tr>
			<th>Adres: </th>
			<td><input type="text" name="kurum_adres"></td>
		</tr>
		<tr>
			<th>Üretim/Hizmet alanı: </th>
			<td><input type="text" name="hizmet_alani"></td>
		</tr>
		<tr>
			<th>Telefon: </th>
			<td><input type="text" name="kurum_telefon"></td>
		</tr>
		<tr>
			<th>E posta: </th>
			<td><input type="text" name="kurum_eposta"></td>
		</tr>
		<tr>
			<th>Web adresi: </th>
			<td><input type="text" name="web_adresi"></td>
		</tr>
		<tr>
			<th>Staj başlama tarihi: </th>
			<td><input type="text" name="baslama_tarihi"></td>
		</tr>
		<tr>
			<th>Staj bitiş tarihi: </th>
			<td><input type="text" name="bitis_tarihi"></td>
		</tr>
		<tr>
			<th>Staj süresi: </th>
			<td><input type="text" name="sure"></td>
		</tr>
		
	</table>
<table class="table5">
<b>Yetkili Bilgileri</b><br>
		<tr>
			<th>Ad: </th>
			<td><input type="text" name="yetkili_ad"></td>
		</tr>
		<tr>
			<th>Soyad: </th>
			<td><input type="text" name="yetkili_soyad"></td>
		</tr>
		<tr>
			<th>Görev: </th>
			<td><input type="text" name="gorev"></td>
		</tr>
		<tr>
			<th>E posta: </th>
			<td><input type="text" name="yetkili_eposta"></td>
		</tr>

</table>
<input type="submit" name="buton" value="Kaydet" >


<!--<div class="bilgiler" style="display: inline-block;" >
<b>Öğrenci Bilgileri</b><br>

		Ad:		 <input type="text">
		Soyad:<input  type="text"><br>
		Öğrenci No:  <input  type="text">
		E-mail:  <input  type="text"><br>
		İkametgah Adresi:  <input  type="text"><br><br>

<b>Nüfus Kayıt Bilgileri</b><br>
		Tc Kimlik No: <input type="text">
		Seri No:  <input  type="text"><br><br>
		Ana Adı:  <input  type="text">
		Baba Adı:  <input  type="text"><br>
		Doğum Yeri: <input type="text">
		Doğum tarihi:  <input  type="text">
		Nüfusa kayıtlı il:  <input  type="text">
		İlçe:  <input  type="text">
		Mahalle/Köy:  <input  type="text">
		Cilt No:  <input  type="text">
		Aile Sıra No:  <input  type="text">
		Sıra no:  <input  type="text">
		Verildiği yer:  <input  type="text">
		Veriliş tarihi:  <input  type="text">
		Veriliş Nedeni:  <input  type="text">
</div>
-->
	</form>
</center>
</body>
</html>