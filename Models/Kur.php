<?php

#region enumlar
abstract class Bankalar
{
    private const Merkez_Bankasi  = 0;
    private const Garanti = 1;
    private const Is_Bankasi = 2;
    private const Akbank = 3;
    private const Yapi_Kredi = 4;
    private const Ziraat = 5;
    private const HSBC = 6;
    private const Halkbank = 7;
    private const Vakifbank = 8;
    private const TEB = 9;
    private const Sekerbank = 10;
    private const Kuveyt_Turk = 11;
    private const Enpara = 12;
}
abstract class VarlikTurleri
{
    private const USD = 0;
    private const EUR = 1;
    private const GBP = 2;
    private const Gram_Altin = 3;
    private const Ons_Altin = 4;
}
#endregion

class Kur{

    public $banka;
    public $varlikTuru;
    public $alis;
    public $satis;
    
    function __construct($s) {
        $this->banka = $s['banka'];
        $this->varlikTuru = $s['varlikTuru'];
        $this->alis = $s['alis'];
        $this->satis = $s['satis'];
     }
}
        
    
    

?>