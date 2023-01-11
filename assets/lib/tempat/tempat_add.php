<?php 

include "../conn.php";

$Lokasi_Ruangan = $_POST['Lokasi_Ruangan'];
$Jumlah_Kursi = $_POST['Jumlah_Kursi'];

$sql = "INSERT INTO tempat (Kd_Tempat,Lokasi_Ruangan,Jumlah_Kursi) VALUES ('','$Lokasi_Ruangan','$Jumlah_Kursi')";


if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record Added successfully');</script>";
  header("location:../../../tempat.php");
} else {
  echo "Error adding record: " . mysqli_error($conn);
}