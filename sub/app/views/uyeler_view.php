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
.onay{
    
    margin-left: 700px;
    margin-top: 20px;
}
</style>

<form action="http://localhost/sub/index.php?url=yonetici/uye_ekle" >
<table align="center" >
		<tr>
			<th>Ad</th>
			<th>Soyad </th>
		</tr>
		
			<?php
                foreach ($listele as $key => $value) {
                ?><tr><?php
					echo "<td>".$value["ad"]."</td>";
					echo "<td>".$value["soyad"]."</td>";
				?></tr><?php
 }
                	/*foreach ($value as $keyy => $valuee) {
                		echo "<td>".$valuee."</td>";
                	}*/
                	//echo "<td>".$value. "</td>"; 	
                //echo "<li>" . $value["baslik"] ."</li>";
                ?>
</table>
<input class="onay" type="submit" name="ekle"  value="Tamam">
</form>
