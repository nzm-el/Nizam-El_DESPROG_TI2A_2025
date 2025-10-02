<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Associative Array</title>
<style>
    /* Tambahkan CSS di sini untuk menata tabel */
    table {
        border-collapse: collapse;
        width: 50%;
        margin-top: 20px;
    }
    th, td {
        border: 1px solid #000000ff;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #0bc3c0ff;
    }
</style>
</head>
<body>
<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'];
?>

<h2>Informasi Dosen</h2>
<table>
    <tr>
        <th>Nama</th>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <th>Domisili</th>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>