<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id_barang  = $_POST['id_barang'];
 $nama_barang = $_POST['nama_barang'];
 $stok = $_POST['stok'];
 
 $sql = "INSERT INTO barang (id_barang, nama_barang, stok) VALUES
('$id_barang', '$nama_barang', '$stok')";
 if ($conn->query($sql) === TRUE) {
 echo "Data berhasil disimpan.";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
}
?>