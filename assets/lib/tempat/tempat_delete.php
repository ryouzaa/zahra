<?php 

include "../conn.php";

$id = $_POST['Kd_Tempat'];

$sql = "DELETE FROM tempat WHERE Kd_Tempat=$id";

if ($conn->query($sql) === TRUE) {
    echo "</script>alert('Record deleted successfully');";
    header("location:../../../tempat.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
