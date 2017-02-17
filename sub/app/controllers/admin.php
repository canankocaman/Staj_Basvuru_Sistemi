<?php 	

class Admin extends Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function login_kontrol()
	{
		Session::init();
		//$cap = Session::get("captcha");
		
		if(isset($_REQUEST["captcha"]) && $_REQUEST["captcha"] != "" && $_SESSION['captcha'] == $_REQUEST["captcha"])

		{

			$kuladi = $_POST[kullanici_adi];
			$sfr= $_POST[sifre];

			$admin_model = $this->load->model("admin_model");
			$sonuc = $admin_model->user_kontrol($kuladi, $sfr);
			


			if ($sonuc[type]=="o") {
				header('Location: index.php?url=ogrenci');
				Session::init();
	            Session::set("login", true);
	            Session::set("kullanici_adi", $kuladi);
			}

			elseif ($sonuc[type]=="k") {
				header('Location: index.php?url=komisyon_uye');
				Session::init();
	            Session::set("login", true);
	            Session::set("kullanici_adi", $kuladi);
			}

			elseif ($sonuc[type]=="y") {
			 	//header('Location: app/controllers/yonetici.php');
			 	header('Location: index.php?url=yonetici');
			 	Session::init();
	            Session::set("login", true);
	            Session::set("kullanici_adi", $kuladi);
			 }

			 else {
			 	//header('Location: index.php');
				echo "<script language='javascript'>
	    window.alert('Hatalı Giris!')
	    window.location.href='http://localhost/sub/index.php';
	    </script>";
			 }
		}

	else {
		echo "<script language='javascript'>
    window.alert('Hatalı Captcha!')
    window.location.href='http://localhost/sub/index.php';
    </script>";
	}


}

		

	public function anasayfa(){
        $this->load->view("admin_panel");
    }

}


//Session::set("sifre", $sfr);
	//include_once 'models/index_model.php';


	/*if ($_GET[kullanici_adi] == $icerik[kullanici_adi] && $_GET[sifre]==$icerik[sifre] ) {

	if ($icerik[type]== "o") {
		header('Location: controllers/ogrenci_con.php');
	    } 

	elseif($icerik[type]=="k"){
		header('Location: controllers/komisyon_uye_con.php');
    	}

	elseif ($icerik[type]=="y") {
		header('Location: controllers/yonetici_con.php');
	    }
	}

else{

	//header('Location: index.php');
	echo "<script> alert('Hatalı giris!'); </script>";

	}*/

 ?>
