<?php 

include "../conn.php";

$Nm_Paket_Menu = $_POST['Nm_Paket_Menu'];
$Harga_Paket = $_POST['Harga_Paket'];


function unique_id($l = 6) {
  return substr(md5(uniqid(mt_rand(), true)), 0, $l);
}

$createId = "M-".unique_id();

$sql = "INSERT INTO paket_menu (Kd_Paket_Menu,Nm_Paket_Menu,Harga_Paket) VALUES ('$createId','$Nm_Paket_Menu','$Harga_Paket')";


if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record Added successfully');</script>";
  header("location:../../../menu.php");
} else {
  echo "Error adding record: " . mysqli_error($conn);
}