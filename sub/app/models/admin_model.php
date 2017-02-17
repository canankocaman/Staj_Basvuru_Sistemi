<meta charset="utf-8">

<?php 
	//`type`
	class admin_model extends Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function user_kontrol($kuladi, $sfr)
		{

			$result = $this->conn->query("SELECT * FROM `admin` WHERE `kullanici_adi`= $kuladi 
			AND `sifre`= $sfr");

			if ($result==true) {
				$icerik = $result->fetch_assoc();
				print_r($icerik);
			return $icerik;

			}			
		
			//echo "Ad: ".$icerik[kullanici_adi]." Sifre: ".$icerik[sifre]." Tip: ".$icerik[type];
		}
	}


/* SELECT ile veri döndüreceğimiz için query() kullandık. 
Eğer INSERT INTO... gibi veri döndürmemize gerek olmayan bi sorgu yazarsak real_query() kullanabiliriz. 
Böylece sorgumuz daha hızlı çalışır */

/*	
	$_SESSION[kullanici_adi] = $icerik[kullanici_adi];
//echo "Ad: ".$icerik[kullanici_adi]." Sifre: ".$icerik[sifre]." Tip: ".$icerik[type];*/


	/* $bilgi = $conn->query("SELECT * FROM `ogrenci_bilgileri` WHERE `ogr_no` = '259143'");
	$bilgiler = $bilgi->fetch_assoc();
	$_SESSION[ogr_no] = $bilgiler[ogr_no];
	*/



 ?>

