<?php
require_once 'TransferBank.php';
require_once 'EWallet.php';
require_once 'QRIS.php';
require_once 'COD.php';
require_once 'VirtualAccount.php';

$jumlah = $_POST['jumlah'];
$metode = $_POST['metode'];

$object = new $metode($jumlah);

echo $object->prosesPembayaran();
echo "<br>";

echo "Diskon: Rp " . $object->hitungDiskon() . "<br>";
echo "Pajak: Rp " . $object->hitungPajak() . "<br>";
echo "Total Akhir: Rp " . $object->totalAkhir() . "<br><br>";

echo $object->cetakStruk();
?>