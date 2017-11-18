<?php

class Hewan
{

    // public artinya property ini bisa d akses dan d ubah dr luar badan/scope {} kelas ini
    public $makanan;
    // private artinya property ini bisa d akses dan d ubah dr luar badan/scope {} kelas ini
    // kita ganti jd protected, artinya property ini cuma bsa diakses dr kelas ini dan turunannya.
    protected $caraBergerak;

    /**
     * @contructor
     *
     * method ini dipanggil ketika membuat object baru
     */
    public function __construct($makanan, $caraBergerak)
    {
        
        /**
         * $this->makanan adalah property dari kelas Hewan
         * $makanan adalah variable yg diterima contructor
         */
        $this->makanan = $makanan;
        
        /**
         * $this->caraBergerak adalah property dari kelas Hewan
         * $caraBergerak adalah variable yg diterima contructor
         */
        $this->caraBergerak = $caraBergerak;

        // jadi diatas itu ditetapkan property dr object yg dibuat

    }
    
    /**
     * method public artinya method ini bisa dipanggil dr luar scope class ini
     */
    public function bergerak()
    {
        echo 'hewan ini bergerak dengan ' . $this->caraBergerak;
        self::test('dari method bergerak');
    }

    /**
     * method public bisa d panggil dr mana aja
     * method static artinya method ini adalah milik kelas ini sendiri
     * sama seperti function pada umumnya
     * method ini tidak bisa dipanggil oleh object ($this)
     * tapi didalam method ini tidak bisa menggunakan property dan method object ($this)
     *
     * cara pemanggilannya adalah ::
     * contoh
     *  Hewan::test();
     *
     * kalau pemanggilan dr kelas ini sendiri
     *  self::test();
     *
     */
    public static function test($s)
    {
        echo "<br>Method static milik kelas " .__CLASS__ . " dipanggil " . $s . "<br>";
    }
}
