<?php 

/**
 * nama
 */
class Nama
{
    /**
     * summary
     */

    public $nama_depan = NULL;
    public $nama_belakang = NULL;
    public $cetak_nama;

    public function __construct($nama_depan, $nama_belakang)
    {
        $this->nama_depan = $nama_depan;

        $this->nama_belakang = $nama_belakang;
    }

   public function cek_nama()
   {
       return $this->nama_depan. " " . $this->nama_belakang;
   }
}

 ?>