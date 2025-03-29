<?php
include 'config.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
 echo "ID Barang: " . $row["id_barang"] . " Nama Barang: " .
$row["nama_barang"] . " - Stok: " . $row["stok"] . "<br>";
 }
} else {
 echo "Tidak ada data.";
}
$conn->close();
?>