<?php 

include "../conn.php";

$id = $_POST['Kd_Tempat'];
$Lokasi_Ruangan = $_POST['Lokasi_Ruangan'];
$Jumlah_Kursi = $_POST['Jumlah_Kursi'];

$sql = "UPDATE tempat SET Kd_Tempat='$id',Lokasi_Ruangan='$Lokasi_Ruangan',Jumlah_Kursi='$Jumlah_Kursi' WHERE Kd_Tempat='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record updated successfully');</script>";
  header("location:../../../tempat.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}