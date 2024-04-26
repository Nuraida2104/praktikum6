<?php
require 'dbkoneksi.php';

// Query untuk mendapatkan data pasien
$query = $dbh->query('SELECT * FROM pasien');

// Loop menggunakan foreach untuk menampilkan data pasien
foreach ($query as $row) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['kode'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['tmp_lahir'] . "</td>";
    echo "<td>" . $row['tgl_lahir'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['kelurahan_id'] . "</td>";
    echo "</tr>";
}
?>