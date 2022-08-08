<?php
include_once 'connection.php';
$sql = "DELETE FROM veiculo WHERE id_veiculo='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: lista.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 