<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<hr>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan {$hari} hari untuk mencapai jarak 500 kilometer.";

echo "<hr>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: {$jumlahBuah}";

echo "<hr>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: {$totalSkor}";

echo "<hr>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: {$nilai} (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: {$nilai} (Lulus) <br>";
}

echo "<hr>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$totalNilai = 0;
$jumlahNilai = 0;

for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
    $jumlahNilai++;
}
$rataRata = $totalNilai / $jumlahNilai;

echo "Total nilai yang digunakan: {$totalNilai} <br>";
echo "Rata-rata nilai yang digunakan: {$rataRata}";

echo "<hr>";
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}
$hargaBayar = $hargaProduk - $diskon;

echo "Harga yang harus dibayar: Rp {$hargaBayar}";

echo "<hr>";
$poinPemain = 600;
$hadiahTambahan = ($poinPemain > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: {$poinPemain} <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiahTambahan}";
?>