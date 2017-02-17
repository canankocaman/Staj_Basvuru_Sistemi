<meta charset="utf-8">
<?php 

	class ogrenci_model extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function bilgi_listele($kuladi, $sfr)
		{

			$result = $this->conn->query("SELECT * FROM `ogrenci_bilgileri` WHERE `ogr_no`= $kuladi");
			$icerik = $result->fetch_assoc();
			
			return $icerik;
		}

		public function basvuru_kaydet($basvuru_bilgileri)
		{
			$this->conn->query(" INSERT INTO `yetkili_bilgileri`(`yetkili_ad`, `yetkili_soyad`, `görev`, `e-posta`) VALUES ($basvuru_bilgileri[23],$basvuru_bilgileri[24],  
				$basvuru_bilgileri[26],$basvuru_bilgileri[25]) ");

			$icerik = $this->conn->query("INSERT INTO `kurum_bilgileri`(`kurum_adi`, `kurum_adres`, `hizmet_alani`, `kurum_telefon`, `kurum_eposta`, `web_adresi`) VALUES ( $basvuru_bilgileri[14],$basvuru_bilgileri[15],$basvuru_bilgileri[16],$basvuru_bilgileri[17],$basvuru_bilgileri[18],$basvuru_bilgileri[19])");
		}

		public function staj_sonuc($ogr_no)
		{
		    $result	= $this->conn->query("SELECT * FROM `staj_bilgileri` WHERE `ogr_no`= $ogr_no LIMIT 0 , 4");

			$array = array();
		 //burada sorun vaarr !!
		 	while ($row = $result->fetch_assoc()) {
				$array[] = $row;
		 	}
		 return $array;
		}

		public function staj_surec($ogr_no)
		{
			$result	= $this->conn->query("SELECT * FROM `staj_bilgileri` WHERE `ogr_no`= $ogr_no LIMIT 0 , 4");
			$array = array();
			while ($row = $result->fetch_assoc()) {
					$array[] = $row;
		 			}
		 		return $array;
		}

		public function staj_defteri($ogr_no, $bilgi)
			{
				$tarih = date("Y-m-d");

				$result	= $this->conn->query(" INSERT INTO `staj_ozeti` 
					( `ogr_no`, `bilgi_giris_tarihi`, `bilgi_tarihi`, `bilgi`, `bilgi_id` )
					 VALUES ('$ogr_no','$tarih','', '$bilgi', '') ");

						if (isset($result)) {
							echo "<script language='javascript'>
	    window.alert('Bilgi Eklendi')
	    window.location.href='http://localhost/sub/index.php?url=ogrenci';
	    </script>";
						}

		
			}	

	}


 ?>