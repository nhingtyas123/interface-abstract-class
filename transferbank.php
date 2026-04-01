<?php
require_once 'pembayaran.php' ;
require_once 'cetak.php' ;

#penggunaan class transfer bank dari extend
class transferbank extends pembayaran implements cetak {
    public function prosespembayaran() {
        if ($this->validasi()) {
            return " trasnsfer bank sebesar Rp {$this->jumlah}"
        }
        return "jumlah tidak valid";
    }
    public function cetak struk() {
        return "struk transfer bank: Rp {$this->jumlah}";
    }
}
?>