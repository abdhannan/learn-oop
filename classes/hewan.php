<?php

class Hewan
{

    // public artinya property ini bisa d akses dan d ubah dr luar badan/scope {} kelas ini
    public $makanan;
    // public artinya property ini bisa d akses dan d ubah dr luar badan/scope {} kelas ini
    private $caraBergerak;

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
    }
}
