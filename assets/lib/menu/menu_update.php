<?php 

include "../conn.php";

$id = $_POST['Kd_Paket_Menu'];
$Nm_Paket_Menu = $_POST['Nm_Paket_Menu'];
$Harga_Paket = $_POST['Harga_Paket'];

$sql = "UPDATE paket_menu SET Kd_Paket_Menu='$id',Nm_Paket_Menu='$Nm_Paket_Menu',Harga_Paket='$Harga_Paket' WHERE Kd_Paket_Menu='$id'";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record updated successfully');</script>";
  header("location:../../../menu.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}