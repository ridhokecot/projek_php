<?php 
$conn = new mysqli("localhost", "root", "", "perpa");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>