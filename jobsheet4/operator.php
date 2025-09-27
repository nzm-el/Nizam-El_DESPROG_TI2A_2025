<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: {$a} + {$b} = {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil Perkalian: {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil Pembagian: {$a} / {$b} = {$hasilBagi} <br>";
echo "Hasil Sisa Bagi: {$a} % {$b} = {$sisaBagi} <br>";
echo "Hasil Pangkat: {$a} ** {$b} = {$pangkat} <br>";

echo "<hr>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: {$a} == {$b} = " . ($hasilSama ? "true" : "false") . "<br>";
echo "Hasil Tidak Sama: {$a} != {$b} = " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil: {$a} < {$b} = " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar: {$a} > {$b} = " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil Sama: {$a} <= {$b} = " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar Sama: {$a} >= {$b} = " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

echo "<hr>";
$hasilAND = $a && $b; 
$hasilOR = $a || $b;
$hasilNOT_A = !$a;
$hasilNOT_B = !$b;

echo "Hasil AND: {$a} && {$b} = " . ($hasilAND ? "true" : "false") . "<br>";
echo "Hasil OR: {$a} || {$b} = " . ($hasilOR ? "true" : "false") . "<br>";
echo "Hasil NOT A: !{$a} = " . ($hasilNOT_A ? "true" : "false") . "<br>";
echo "Hasil NOT B: !{$b} = " . ($hasilNOT_B ? "true" : "false") . "<br>";

echo "<hr>";
$a = 10;
$a += $b;
echo "Hasil Penugasan (+=): " . $a . "<br>";

$a = 10;
$a -= $b;
echo "Hasil Penugasan (-=): " . $a . "<br>";

$a = 10;
$a *= $b;
echo "Hasil Penugasan (*=): " . $a . "<br>";

$a = 10;
$a /= $b;
echo "Hasil Penugasan (/=): " . $a . "<br>";

$a = 10;
$a %= $b;
echo "Hasil Penugasan (%=): " . $a . "<br>";

echo "<hr>";
$a = 10; 
$hasilIdentik = $a === $b; 
$hasilTidakIdentik = $a !== $b; 

echo "Hasil Identik: {$a} === {$b} = " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Hasil Tidak Identik: {$a} !== {$b} = " . ($hasilTidakIdentik ? "true" : "false") . "<br>";

echo "<hr>";
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong: {$kursiKosong} kursi <br>";
echo "Persentase kursi yang masih kosong: {$persentaseKosong}%";
?>