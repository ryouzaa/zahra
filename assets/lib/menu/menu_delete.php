<?php 

include "../conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM paket_menu WHERE Kd_Paket_Menu='$id'";

if ($conn->query($sql) === TRUE) {
  echo "</script>alert('Record deleted successfully');";
  header("location:../../../menu.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
