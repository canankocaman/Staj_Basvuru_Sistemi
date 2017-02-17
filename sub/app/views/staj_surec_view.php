<style type="text/css">
	table, th, td {
    border: 1px;
    border-style: inset;
    background-color:   #e6eeff;
}
td {
  width: 180px;
  padding-left: 10px;
}
</style>
<table align="center" >
		<tr>
			<th>Öğrenci No</th>
			<th>Kurum Adi </th>
			<th>Staj Baslama Tarihi</th>
			<th>Staj Bitis Tarihi</th>
			<th>Onay Durumu</th>
		</tr>
		
			<?php
                foreach ($listele as $key => $value) {
                ?><tr><?php
					echo "<td>".$value["ogr_no"]."</td>";
					echo "<td>".$value["kurum_adi"]."</td>";
					echo "<td>".$value["staj_baslama_tarihi"]."</td>";
					echo "<td>".$value["staj_bitis_tarihi"]."</td>";
					echo "<td>".$value["onay_durumu"]."</td>";
				?></tr><?php
 }
                	/*foreach ($value as $keyy => $valuee) {
                		echo "<td>".$valuee."</td>";
                	}*/
                	//echo "<td>".$value. "</td>"; 	
                //echo "<li>" . $value["baslik"] ."</li>";

                ?>
</table>