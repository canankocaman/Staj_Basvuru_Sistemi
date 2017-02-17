<meta charset="utf-8">

<?php 

	class yonetici_model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
			
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

		public function deneme($onay)
		{
			$result	= $this->conn->query("UPDATE `staj_bilgileri` SET `onay_durumu` = 'onaylandi' WHERE `onay_durumu` = 
				'onaybekliyor'");
			if ($this->conn->affected_rows>0) {
				echo "<script language='javascript'>
    window.alert('Başvurular onaylandi')
    window.location.href='http://localhost/sub/index.php?url=komisyon_uye/basvurular';
    </script>";
			}else { echo "<script language='javascript'>
    window.alert('Başvurular onaylanamadi!')
    window.location.href='http://localhost/sub/index.php?url=komisyon_uye/basvurular';
    </script>"; }
			
		}

		public function stajlar()
		{
			$result	= $this->conn->query( "SELECT * FROM `staj_bilgileri` WHERE `onay_durumu` = 
				'onaylandi'");
			
			$array = array();
		
		 	while ($row = $result->fetch_assoc()) {
				$array[] = $row;
		 	}
		 return $array;
		}

		public function uye_duzenle()
		{
			$result	= $this->conn->query( "SELECT * FROM `akademisyenler`");
			
			$array = array();
		
		 	while ($row = $result->fetch_assoc()) {
				$array[] = $row;
		 	}
		 return $array;
		}

	}

 ?>