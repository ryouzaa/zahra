<?php 

include "../conn.php";

$Nm_Admin = $_POST['Nm_Admin'];
$No_Tlp = $_POST['No_Tlp'];
$Email = $_POST['Email'];

function unique_id($l = 6) {
  return substr(md5(uniqid(mt_rand(), true)), 0, $l);
}

$createId = "A-".unique_id();

$sql = "INSERT INTO admin (Kd_Admin,Nm_Admin,No_Tlp,Email) VALUES ('$createId','$Nm_Admin','$No_Tlp','$Email')";


if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record Added successfully');</script>";
  header("location:../../../index.php");
} else {
  echo "Error adding record: " . mysqli_error($conn);
}