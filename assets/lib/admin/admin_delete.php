<?php 

include "../conn.php";

$id = $_POST['Kd_Admin'];

$sql = "DELETE FROM admin WHERE Kd_Admin=$id";

if ($conn->query($sql) === TRUE) {
  echo "</script>alert('Record deleted successfully');";
  header("location:../../../index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
