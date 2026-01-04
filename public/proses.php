<?php
include "../config/koneksi.php";

$g1 = $_POST['g1'];
$g2 = $_POST['g2'];

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];

// biaya distribusi
$biaya_g1 = [8, 6, 10];
$biaya_g2 = [9, 7, 4];

// alokasi berdasarkan biaya terendah
$g2_t3 = min($g2, $t3);
$g2 -= $g2_t3;
$t3 -= $g2_t3;

$g1_t2 = min($g1, $t2);
$g1 -= $g1_t2;
$t2 -= $g1_t2;

$g1_t1 = min($g1, $t1);
$g1 -= $g1_t1;
$t1 -= $g1_t1;

$g2_t1 = min($g2, $t1);

// sisanya nol
$g1_t3 = 0;
$g2_t2 = 0;

// total biaya
$total =
    ($g1_t1 * 8) +
    ($g1_t2 * 6) +
    ($g2_t1 * 9) +
    ($g2_t3 * 4);

mysqli_query($conn, "INSERT INTO hasil_optimasi VALUES (
    NULL,
    '$g1_t1','$g1_t2','$g1_t3',
    '$g2_t1','$g2_t2','$g2_t3',
    '$total',
    NOW()
)");

header("Location: hasil.php");
