<?php
// function perkenalan () {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Elok<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// // memanggil fungsi yang sudah dibuat untuk pertama kalinya
// perkenalan();

// echo "<hr>"; // Tambahkan garis horizontal untuk memisahkan output

// // memanggil fungsi lagi untuk kedua kalinya
// perkenalan();
?>

<?php
//membuat fungsi
function perkenalan ($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapkan = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>