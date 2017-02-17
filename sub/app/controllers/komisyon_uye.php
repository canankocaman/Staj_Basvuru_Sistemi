<?php 

	//include '../views/komisyon_uye_view.php';

class komisyon_uye extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->komisyon_uye();
	}

	public function komisyon_uye()
	{
		$this->load->view("komisyon_uye");
		Session::init();
		$kuladi = Session::get("kullanici_adi");
	}

	public function atanan_ogrenciler()
	{
		$kuladi = $_SESSION[kullanici_adi];
		$komisyon_model = $this->load->model("komisyon_uye_model");
		$atanan["listele"] = $komisyon_model->atanan_ogrenciler($kuladi);

		$this->load->view("atanan_ogrenciler", $atanan);
	}

	public function basvurular()
	{
	
		$komisyon_model = $this->load->model("komisyon_uye_model");
		$onay["listele"] = $komisyon_model->basvurular();
		
		$this->load->view("basvurular", $onay);
	}

	public function deneme()
	{
		$onay = $_POST['select'];

		$komisyon_model = $this->load->model("komisyon_uye_model");
		$komisyon_model->deneme($onay);
	}

	public function stajlar()
	{
		//$kuladi = $_SESSION[kullanici_adi];
		$komisyon_model = $this->load->model("komisyon_uye_model");
		$atanan["listele"] = $komisyon_model->stajlar();

		$this->load->view("staj_sonuc", $atanan);
	}

	public function staj_degerlendirme()
	{
		$kuladi = $_SESSION[kullanici_adi];
		$komisyon_model = $this->load->model("komisyon_uye_model");
		$atanan["listele"] = $komisyon_model->staj_degerlendirme($kuladi);

		$this->load->view("staj_degerlendirme", $atanan);
	}
}

 ?>