<!DOCTYPE html>
<html>
<head>
    <title>Optimasi Distribusi Gudang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Sistem Optimasi Distribusi</h2>
<p>Aplikasi ini digunakan untuk menentukan distribusi barang dengan biaya minimum.</p>

<form method="post" action="proses.php">
    <h4>Kapasitas Gudang</h4>
    G1: <input type="number" name="g1" required><br><br>
    G2: <input type="number" name="g2" required><br><br>

    <h4>Permintaan Toko</h4>
    T1: <input type="number" name="t1" required><br><br>
    T2: <input type="number" name="t2" required><br><br>
    T3: <input type="number" name="t3" required><br><br>

    <button type="submit">Proses Optimasi</button>
</form>

</body>
</html>
