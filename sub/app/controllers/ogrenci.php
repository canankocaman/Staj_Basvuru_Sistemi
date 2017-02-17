<meta charset="utf-8">
<?php 
	
	include '../views/ogrenci_view.php';
	
	class Ogrenci extends Controller
	{
		
	public	function __construct()
		{
			parent::__construct();
			$this->ogrenci();
		}

		public function ogrenci()
		{
			
			$this->load->view("ogrenci");
		}

	public function profil(){

		Session::init();
		$kuladi = Session::get("kullanici_adi");

		$ogrenci_model = $this->load->model("ogrenci_model");
		$sonuc = $ogrenci_model->bilgi_listele($kuladi, $sfr);
			Session::init();
            Session::set("login", true);
            Session::set("ogr_no", $sonuc[ogr_no]);
            Session::set("ad", $sonuc[ad]);
            Session::set("soyad", $sonuc[soyad]);
            Session::set("eposta", $sonuc[eposta]);
            Session::set("bolum", $sonuc[bölüm]);
            Session::set("sınıf", $sonuc[sınıf]);
            Session::set("telefon", $sonuc[telefon_no]);
            Session::set("ikametgah", $sonuc[ikametgah]);
		$this->load->view("ogrenci_bilgi", $sonuc);
	}

	public function staj_basvuru()
	{
		$tc = $_POST[tc];
    	$seri_no = $_POST[seri_no];
    	$ana_adi = $_POST[ana_adi];
    	$baba_adi = $_POST[baba_adi];
    	$dogum_yeri =$_POST[dogum_yeri]; 
    	$dogum_tarihi = $_POST[dogum_tarihi];
    	$kayitli_il = $_POST[kayitli_il];
    	$kayitli_ilçe = $_POST[kayitli_ilçe];
    	$mahalle_köy = $_POST[mahalle_köy];
    	$cilt_no = $_POST[cilt_no];
    	$sira_no = $_POST[sira_no];
    	$verildigi_nüfus_dairesi = $_POST[verildigi_nüfus_dairesi];
		$verildigi_tarih = $_POST[verildigi_tarih];
		$verilis_nedeni = $_POST[verilis_nedeni];
		$kurum_ad = $_POST[kurum_ad];
		$kurum_adres = $_POST[kurum_adres];
		$hizmet_alani = $_POST[hizmet_alani];
		$kurum_telefon = $_POST[kurum_telefon];
		$kurum_eposta = $_POST[kurum_eposta];
		$web_adresi = $_POST[web_adresi];
		$baslama_tarihi = $_POST[baslama_tarihi];
		$bitis_tarihi = $_POST[bitis_tarihi];
		$sure = $_POST[sure];
		$yetkili_ad = $_POST[yetkili_ad];
		$yetkili_soyad = $_POST[yetkili_soyad];
		$yetkili_eposta = $_POST[yetkili_eposta];
		$gorev = $_POST[gorev];
		$basvuru_bilgileri = array($tc,$seri_no,$ana_adi,$baba_adi,$dogum_yeri,$dogum_tarihi,$kayitli_il,$kayitli_ilçe,$mahalle_köy,$cilt_no,$sira_no,$verildigi_nüfus_dairesi,$verildigi_tarih,$verilis_nedeni,$kurum_ad,$kurum_adres,$hizmet_alani,$kurum_telefon,$kurum_eposta,$web_adresi,$baslama_tarihi,$bitis_tarihi,$sure,$yetkili_ad,$yetkili_soyad,$yetkili_eposta,$gorev);

		

		$ogrenci_model = $this->load->model("ogrenci_model");

		$sonuc = $ogrenci_model->basvuru_kaydet($basvuru_bilgileri);

	/*	$staj_basvuru_model = $this->load->model("staj_basvuru_model");
		$staj_b = $staj_basvuru_model->basvuru_ekle();*/

		$this->load->view("staj_basvuru");
	}

	public function staj_surec()
	{
		$ogr_no=$_SESSION["ogr_no"];
		$ogrenci_model = $this->load->model("ogrenci_model");
		$staj_s["listele"] = $ogrenci_model->staj_surec($ogr_no);
		$this->load->view("staj_surec" , $staj_s);
	}

	public function staj_sonuc()
	{
		$ogr_no=$_SESSION["ogr_no"];
		$ogrenci_model = $this->load->model("ogrenci_model");
		$staj_r["listele"] = $ogrenci_model->staj_sonuc($ogr_no);
		$this->load->view("staj_sonuc" , $staj_r);
	}

	public function staj_defter()
	{
		$ogr_no=$_SESSION["ogr_no"];
		$ogrenci_model = $this->load->model("ogrenci_model");
		//$staj_d = $ogrenci_model->staj_defteri($ogr_no);
		$this->load->view("staj_defteri");
	}

	public function bilgi_ekle()
	{
		$ogr_no=$_SESSION["ogr_no"];
		$bilgi = $_POST["bilgi"];
		$ogrenci_model = $this->load->model("ogrenci_model");
		$staj_d = $ogrenci_model->staj_defteri($ogr_no,$bilgi);

	}

}

 ?>