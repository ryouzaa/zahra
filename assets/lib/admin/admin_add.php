<?php 

include "../conn.php";

$Nm_Admin = $_POST['Nm_Admin'];
$No_Tlp = $_POST['No_Tlp'];
$Email = $_POST['Email'];

$sql = "INSERT INTO admin (Kd_Admin,Nm_Admin,No_Tlp,Email) VALUES ('','$Nm_Admin','$Email')";


if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record Added successfully');</script>";
  header("location:../../../index.php");
} else {
  echo "Error adding record: " . mysqli_error($conn);
}