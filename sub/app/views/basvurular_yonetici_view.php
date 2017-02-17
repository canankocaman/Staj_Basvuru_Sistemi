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
.form{
}

.onay{
	
	margin-left: 700px;
	margin-top: 20px;
}
</style>

<form action="http://localhost/sub/index.php?url=komisyon_uye/deneme" method = "post">
<table align="center" >
		<tr>
			<th>Öğrenci No</th>
			<th> Kurum Adı</th>
			<th> Onay Durumu</th>
		</tr>
		
			<?php
                foreach ($listele as $key => $value) {
                ?><tr><?php
					echo "<td>".$value["ogr_no"]."</td>";
					echo "<td>".$value["kurum_adi"]."</td>";
					echo "<td>".$value["onay_durumu"]."</td>";
					?> 
				   </tr>

			<?php  } ?>
</table>
</form>