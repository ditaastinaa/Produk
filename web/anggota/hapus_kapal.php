<?php
// include database connection file
include_once("../../dbconfig.php");
 
// Get id from URL to delete that user
$id_kapal = $_GET['id_kapal'];
 
// Delete user row from table based on given id
$result = mysqli_query($connect, "DELETE FROM data_kapal WHERE id_kapal=$id_kapal");
 
// After delete redirect to Home, so that latest user list will be displayed.
echo "<script>alert('Data berhasil dihapus')</script>";
header('Refresh: 0; URL=kapal.php');
?>