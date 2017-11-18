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

}
