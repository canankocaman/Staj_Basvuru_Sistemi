<?php

class Bootstrap{

    public function __construct() {

       $url = isset($_GET['url']) ? $_GET['url'] : null;

        if($url != null){

            $url = rtrim($url, "/");
            $url = explode("/", $url);
        }
        else{
           unset($url); 
        }

       if(isset($url[0])){
            include  "app/controllers/" . $url[0] . ".php";
            $c = new $url[0]();

            if(isset($url[2])){
                $c->$url[1]($url[2]);
            }else{
                if(isset($url[1])){
                    $c->$url[1]();
                }
            }
        }

        else{ 
            include  "app/controllers/admin.php";
            $c = new admin();
            $c->anasayfa();
        
            }
    }
}
  ?>