<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Array Terindeks</h2>
<?php
$Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    echo $Listdosen[2] . "<br>";
    echo $Listdosen[0] . "<br>";
    echo $Listdosen[1] . "<br>";
?>
</body>
</html>

<?php
// Mendefinisikan array
$Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

// Menggunakan loop for untuk menampilkan array
echo "<h3>Menggunakan For Loop:</h3>";
for ($i = 0; $i < count($Listdosen); $i++) {
    echo $Listdosen[$i] . "<br>";
}

// Menggunakan loop foreach untuk menampilkan array
echo "<h3>Menggunakan Foreach Loop:</h3>";
foreach ($Listdosen as $dosen) {
    echo $dosen . "<br>";
}
?>