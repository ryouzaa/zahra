<?php 

include "../conn.php";

$id = $_POST['Kd_Admin'];
$Nm_Admin = $_POST['Nm_Admin'];
$No_Tlp = $_POST['No_Tlp'];
$Email = $_POST['Email'];

$sql = "UPDATE admin SET Kd_Admin='$id',Nm_Admin='$Nm_Admin',No_Tlp='$No_Tlp',Email='$Email' WHERE Kd_Admin='$id'";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record updated successfully');</script>";
  header("location:../../../index.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}