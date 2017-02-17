<meta charset="utf-8">

<?php 

	class komisyon_uye_model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
			
		}

		public function atanan_ogrenciler($kuladi)
		{

			$result	= $this->conn->query( "SELECT * FROM `atanan_ogrenciler` WHERE `komisyon_uye_id` = $kuladi LIMIT 0, 30 ");

			$array = array();
		
		 	while ($row = $result->fetch_assoc()) {
				$array[] = $row;
		 	}
		 return $array;
		}

		public function basvurular()
		{
			$result	= $this->conn->query( "SELECT * FROM `staj_bilgileri` WHERE `onay_durumu` = 
				'Onay bekliyor'");

			$array = array();
		
		 	while ($row = $result->fetch_assoc()) {
				$array[] = $row;
		 		}

		 	return $array;
		}

		public function stajlar()
		{
			$result	= $this->conn->query("SELECT * FROM `staj_bilgileri` WHERE `onay_durumu` = 
				'Onaylandi'");
			
			$array = array();
		
		 	while ($row = $result->fetch_assoc()) {
				$array[] = $row;
		 	}
		 return $array;
		}

		public function deneme($onay)
		{
		$result	= $this->conn->query( "SELECT * FROM `staj_bilgileri` WHERE `onay_durumu` = 
				'Onay bekliyor'");

			$array = array();
		
		 	while ($row = $result->fetch_assoc()) {
				$array[] = $row;
		 		}
		 		
		 		
foreach ($array as $key => $value ) {
			foreach ($onay as $names => $valuee)
			{
			    $result	= $this->conn->query("UPDATE `staj_bilgileri` SET `onay_durumu` = $valuee WHERE `onay_durumu` = `Onay bekliyor`");
			}
		}
			
			if ($this->conn->affected_rows>0) {
				echo "<script language='javascript'>
    window.alert('Başvurular onaylandi')
    window.location.href='http://localhost/sub/index.php?url=komisyon_uye';
    </script>";
			}else { echo "<script language='javascript'>
    window.alert('Başvurular onaylanamadi!')
    window.location.href='http://localhost/sub/index.php?url=komisyon_uye';
    </script>"; }
			
		}

		public function staj_degerlendirme()
		{	
			
		}
	}

	

 ?>