<?php

class Model {
    
    //protected $db = array();
    protected $conn;
    
    public function __construct() {
       
       $this->conn = new mysqli('localhost', 'root', 'canan.mysql', 'staj_degerlendirme_sistemi');
       $this->conn->set_charset("UTF8"); 
      // $this->load = new Load();

    	/*$dsn = 'mysql:dbname=staj_degerlendirme_sistemi; host=localhost';
        $user = 'root';
        $password = 'canan.mysql';*/

    	/*$sunucu =  'localhost';
    	$kullanici = 'root';
    	$sifre = 'canan.mysql';
    	$veritabani = 'staj_degerlendirme_sistemi';*/

    	//$conn = new mysqli("localhost","root","canan.mysql","staj_degerlendirme_sistemi");
	    //$conn->set_charset("UTF8");


    	/*$this->db = new Database($dsn,$user,$password);

		}*/
    	//$conn = new mysqli("localhost","root","canan.mysql","staj_degerlendirme_sistemi");
	    //$conn->set_charset("UTF8");

	    /*$sunucu = 'localhost';
	    $user = 'root';
	    $password = 'canan.mysql';
	    $veri_tabani = 'staj_degerlendirme_sistemi';*/

	   // $this->db = new Database($sunucu, $user, $password, $veri_tabani);
       
        //$this->db = new Database($dsn, $user, $password);
    

}

}

?>