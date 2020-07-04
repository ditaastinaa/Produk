<?php
// include database connection file
include_once("../../dbconfig.php");
 
// Get id from URL to delete that user
$id_pelabuhan = $_GET['id_pelabuhan'];
 
// Delete user row from table based on given id
$result = mysqli_query($connect, "DELETE FROM data_pelabuhan WHERE id_pelabuhan=$id_pelabuhan");
 
// After delete redirect to Home, so that latest user list will be displayed.
echo "<script>alert('Data berhasil dihapus')</script>";
header('Refresh: 0; URL=pelabuhan.php');
?>