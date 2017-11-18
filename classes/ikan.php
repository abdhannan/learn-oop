<?php

class Ikan extends Hewan{

    // semua property dan method dr parent udah d turunkan disini
    // jadi tidak perlu d buat lagi

    /**
     * kita buat ikan punya contructor sendiri
     * kalau tidak ada, contructor parent yang akan dipanggil
     */
    public function __construct($makanan)
    {
        $this->makanan = $makanan;
        $this->caraBergerak = 'Berenang';
    }

    // method jg bsa d turunkan, klu method diturunkan namanya override
    // jd method ini yang dipanggil oleh object yang d buat dr kelas ini
    // bukan method yg d kelas parent
    public function bergerak(){
        echo 'semua ikan pasti bisa ' . $this->caraBergerak;        
    }
    

}
