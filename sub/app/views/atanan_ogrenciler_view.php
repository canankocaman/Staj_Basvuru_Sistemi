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
			<th>Öğrenci No</th>
			<th> Kurum Adı</th>
		</tr>
		
			<?php
                foreach ($listele as $key => $value) {
                ?><tr><?php
					echo "<td>".$value["ogr_no"]."</td>";
					echo "<td>".$value["kurum_adi"]."</td>";
				
				?></tr><?php
                }

            ?>
</table>