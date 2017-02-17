<?php
	
	//include_once '../views/yonetici_view.php';

	class yonetici extends Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->yonetici();
		}

		public function yonetici()
		{
			$this->load->view("yonetici");
			Session::init();
			$kuladi = Session::get("kullanici_adi");
		}

		public function stajlar()
		{
			$yonetici_model = $this->load->model("yonetici_model");
			$onay["listele"] = $yonetici_model->stajlar();
			$this->load->view("staj_sonuc", $onay);
		}

		public function basvurular()
		{
			$yonetici_model = $this->load->model("yonetici_model");
			$onay["listele"] = $yonetici_model->basvurular();
			$this->load->view("basvurular_yonetici", $onay);
		}

		public function uye_duzenle()
		{
			$yonetici_model = $this->load->model("yonetici_model");
			$onay["listele"] = $yonetici_model->uye_duzenle();
			$this->load->view("uyeler", $onay);
		}
		public function uye_ekle()
		{
			$onay = $_POST['ekle'];
			$yonetici_model = $this->load->model("yonetici_model");
			$yonetici_model->deneme($onay);
		}


	}

  ?>