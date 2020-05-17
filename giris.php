<?php
class Token
{
    public $id;
    public $ad;
    public $access_token;
    public $error_description;
    function __construct() {
        $this->id = 0;
        $this->ad = "";
        $this->access_token = "";
        $this->error_description = "";
     }
}

include("inc/vt_inc.php");
$k = new Token();
if(isset($_POST['kadi']) && isset($_POST['pass']))
{
    if(strlen($_POST['kadi'])>=3 && strlen($_POST['pass'])>=3)
    {
        
        $sql = vt_sec("users","kadi='". $_POST['kadi']."' AND pass='".$_POST['pass']."'");
        if(isset($sql[0]['id']))
        {
            
            $k->id = $sql[0]['id'];
            $k->kadi = $sql[0]['kadi'];
            $k->access_token = "1e27gt";
        }else{
            $k->error_description = "Kullanıcı adı ya da şifre hatalı";
        }
    }
    else
    {
        $k->error_description = "Geçersiz giriş bilgileri";
    }
    
}
header('Content-Type: application/json');
echo json_encode($k);


?>