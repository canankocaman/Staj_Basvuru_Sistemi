<style type="text/css">
	table, th, td {
    border: 1px;
    border-style: inset;
    background-color:   #e6eeff;
}
td {
  width: 250px;
  padding-left: 10px;
}
</style>
<table align="center" >
		<tr>
			<th>Öğrenci No: </th>
			<td> <?php echo $_SESSION["ogr_no"] ?></td>
		</tr>
		<tr>
			<th>Ad: </th>
			<td><?php echo $_SESSION["ad"] ?></td>
		</tr>
		<tr>
			<th>Soyad: </th>
			<td><?php echo $_SESSION["soyad"] ?></td>
		</tr>
		<tr>
			<th>E-Posta: </th>
			<td><?php echo $_SESSION["eposta"] ?></td>
		</tr>
		<tr>
			<th>Bölüm: </th>
			<td><?php echo $_SESSION["bolum"] ?></td>
		</tr>
		<tr>
			<th>Sınıf: </th>
			<td><?php echo $_SESSION["sınıf"] ?></td>
		</tr>
		<tr>
			<th>Telefon: </th>
			<td><?php echo $_SESSION["telefon"] ?></td>
		</tr>
		<tr>
			<th>İkametgah: </th>
			<td><?php echo $_SESSION["ikametgah"] ?></td>
		</tr>
</table>