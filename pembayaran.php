<?php 
abstract class Pembayaran {
    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    // method wajib 
    abstract public function prosesPembayaran();
    abstract public function cetakStruk();

    // validasi
    public function validasi() {
        return $this->jumlah > 0;
    }

    // diskon 10%
    public function hitungDiskon() {
        return $this->jumlah * 0.10;
    }

    // pajak 11%
   public function hitungPajak() {
    $setelahDiskon = $this->jumlah - $this->hitungDiskon();
    return $setelahDiskon * 0.11;
}

    // total akhir
    public function totalAkhir() {
        return $this->jumlah - $this->hitungDiskon() + $this->hitungPajak();
    }
}