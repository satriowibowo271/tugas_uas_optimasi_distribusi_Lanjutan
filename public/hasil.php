<?php
include "../config/koneksi.php";

$q = mysqli_query($conn, "SELECT * FROM hasil_optimasi ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Optimasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Hasil Distribusi Optimal</h2>

<table border="1" cellpadding="8">
<tr>
    <th>Gudang</th>
    <th>T1</th>
    <th>T2</th>
    <th>T3</th>
</tr>
<tr>
    <td>G1</td>
    <td><?= $data['g1_t1'] ?></td>
    <td><?= $data['g1_t2'] ?></td>
    <td><?= $data['g1_t3'] ?></td>
</tr>
<tr>
    <td>G2</td>
    <td><?= $data['g2_t1'] ?></td>
    <td><?= $data['g2_t2'] ?></td>
    <td><?= $data['g2_t3'] ?></td>
</tr>
</table>

<h3>Total Biaya: Rp <?= $data['total_biaya'] ?></h3>

<a href="index.php">← Hitung Ulang</a>

</body>
</html>
