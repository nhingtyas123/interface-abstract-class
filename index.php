<!DOCTYPE html>
<html>
<head>
    <title>Form Pembayaran</title>
</head>
<body>
    <h2>Form Pembayaran</h2>

    <form action="proses.php" method="post">
        <label>Jumlah Pembayaran:</label><br>
        <input type="number" name="jumlah" required><br><br>

        <label>Metode Pembayaran:</label><br>
        <select name="metode">
            <option value="TransferBank">Transfer Bank</option>
            <option value="EWallet">E-Wallet</option>
            <option value="QRIS">QRIS</option>
            <option value="COD">COD</option>
            <option value="VirtualAccount">Virtual Account</option>
        </select><br><br>

        <button type="submit">Bayar</button>
    </form>

</body>
</html>